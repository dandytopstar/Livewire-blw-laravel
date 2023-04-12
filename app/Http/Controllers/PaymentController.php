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

    private StripeClient $stripe;

    public function __construct(PaymentService $paymentService, KlaviyoService $klaviyoService, QuizService $quizService)
    {
        $this->paymentService = $paymentService;
        $this->klaviyoService = $klaviyoService;
        $this->quizService = $quizService;
        $this->stripe = new StripeClient(config('services.stripe.secret'));
    }

    public function index(Request $request, $code, $personalPlan)
    {
        $clientData = $this->quizService->getBabySummary($code);
        $personalPlan = PersonalPlan::query()->where('id', $personalPlan)->first();
        $clientData['personalPlan'] = $personalPlan;

        $subscription = $this->paymentService->getStripeSubscription($clientData['client'], $personalPlan);

        $clientData = array_merge($clientData, $subscription);

        return view('payment', $clientData);
    }

    public function payment(Request $request)
    {
        $paymentData = $request->all();

        $preparedData = $this->paymentService->preparePaymentData($paymentData);

        $client = Client::query()->where('id', $preparedData['client_id'])->first();

        if($preparedData['method'] == 'paypal') {
            $preparedData['status'] = !empty($preparedData['subscription_id']) ? 'succeeded' : 'wrong';

            $result = $this->paymentService->saveTransaction($preparedData);

            $this->klaviyoService->sendClientData(
                $client,
                ClientSteps::ORDERED_PERSONAL_PLAN->value,
                $result->toArray()
            );

            return redirect()->route('payment-result', [$result->id, $client->code]);
        }

        return back();
    }

    public function paymentResult(Request $request, $id)
    {
        $transaction = $this->paymentService->getTransactionById($id);

        $clientData = $this->quizService->getBabySummary($transaction->client->code);

        $clientData['status'] = $transaction->status;
        $clientData['personalPlan'] = $transaction->personalPlan;

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

        $this->klaviyoService->sendClientData(
            $result->client,
            ClientSteps::ORDERED_PERSONAL_PLAN,
            $result->toArray()
        );

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

    public function paymentStripeResult(Request $request)
    {
        $code = $request->input('code');
        $planId = $request->input('plan');
        $status = $request->input('status');
        $client = $this->quizService->getClientByCode($code);
        $personalPlan = PersonalPlan::query()->where('id', $planId)->first();

        $preparedData = [
            'client_id' => $client->id,
            'personal_plan_id' => $personalPlan->id,
            'price' => $personalPlan->billed_price,
            'method' => 'stripe',
            'status' => $status,
        ];

        $result = $this->paymentService->saveTransaction($preparedData);

        $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $preparedData);

        $redirectLink = route('payment-result', [$result->id, $code]);

        return response()->json(['redirectLink' => $redirectLink]);
    }
}
