<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Models\Client;
use App\Models\PersonalPlan;
use App\Services\KlaviyoService;
use App\Services\PaymentService;
use App\Services\QuizService;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    private PaymentService $paymentService;

    private KlaviyoService $klaviyoService;

    private QuizService $quizService;

    public function __construct(PaymentService $paymentService, KlaviyoService $klaviyoService, QuizService $quizService)
    {
        $this->paymentService = $paymentService;
        $this->klaviyoService = $klaviyoService;
        $this->quizService = $quizService;
    }

    public function index(Request $request, $code, $personalPlan)
    {
        $clientData = $this->quizService->getBabySummary($code);
        $clientData['personalPlan'] = PersonalPlan::query()->where('id', $personalPlan)->first();

        $stripe = new StripeClient(config('services.stripe.secret'));

        $intent = $stripe->paymentIntents->create(
            [
                'amount' => $clientData['personalPlan']->billed_price * 100,
                'currency' => 'usd',
                'payment_method_types' => ['card']
            ]
        );

        $clientData['client_secret'] = $intent->client_secret;


        return view('payment', $clientData);
    }

    public function payment(Request $request)
    {
        $paymentData = $request->all();

        $preparedData = $this->paymentService->preparePaymentData($paymentData);

        $client = Client::query()->where('id', $preparedData['client_id'])->first();

        if($preparedData['method'] == 'stripe') {

            $payment = $this->paymentService->stripe($client, $preparedData);

            $preparedData['status'] = $payment ? 'succeeded' : 'wrong';

            $result = $this->paymentService->saveTransaction($preparedData);

            $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $preparedData);

            return redirect()->route('payment-result', [$result->id, $client->code]);
        }

        if($preparedData['method'] == 'paypal') {
            $preparedData['status'] = !empty($preparedData['subscription_id']) ? 'succeeded' : 'wrong';
            $result = $this->paymentService->saveTransaction($preparedData);

            return redirect()->route('payment-result', [$result->id, $client->code]);
        }

        return back();
    }

    public function paymentResult(Request $request, $id)
    {

        $transaction = $this->paymentService->getTransactionById($id);

        $transaction = $transaction->load('client');

        $clientData = $this->quizService->getBabySummary($transaction->client->code);

        $clientData['status'] = $transaction->status;

        return view('payment-result', $clientData);
    }

    public function payPalSuccess(Request $request, $id)
    {
        $payPalResult = $request->all();

        $this->paymentService->updateTransaction($id, [
            'status' => 'succeeded',
            'payment_data' => $payPalResult
        ]);

        $result = $this->paymentService->getTransactionById($id);

        $this->klaviyoService->sendClientData($result->client, ClientSteps::ORDERED_PERSONAL_PLAN, $result->toArray());

        return redirect()->route('payment-result', [$result->id, $result->client->code]);
    }

    public function payPalError(Request $request, $id)
    {
        $payPalResult = $request->all();

        $this->paymentService->updateTransaction($id, [
            'payment_data' => $payPalResult
        ]);

        $result = $this->paymentService->getTransactionById($id);

        $this->klaviyoService->sendClientData($result->client, ClientSteps::ORDERED_PERSONAL_PLAN, $result->toArray());

        return redirect()->route('payment-result', [$result->id, $result->client->code]);
    }
}
