<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Models\Client;
use App\Models\PersonalPlan;
use App\Models\Transaction;
use App\Services\KlaviyoService;
use App\Services\PaymentService;
use App\Services\QuizService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentIntent;

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

        if($clientData['personalPlan']->discount) {
            $clientData['personalPlan']['discount_price'] = $this->paymentService->priceWithDiscount(
                $clientData['personalPlan']->billed_price,
                $clientData['personalPlan']->discount
            );
        }

        return view('payment', $clientData);
    }

    public function payment(Request $request)
    {
        $paymentData = $request->all();

        $preparedData = $this->paymentService->preparePaymentData($paymentData);

        if($preparedData['method'] == 'stripe') {

            $client = Client::query()->where('id', $preparedData['client_id'])->first();

            $payment = $this->paymentService->stripe($client, $preparedData);

            $preparedData['status'] = $payment ? 'succeeded' : 'wrong';

            $result = $this->paymentService->saveTransaction($preparedData);

            $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $preparedData);

            return redirect()->route('payment-result', [$result->id, $client->code]);
        }

        if($preparedData['method'] == 'paypal') {

            $preparedData['result'] = 'wrong';
            $transaction = $this->paymentService->saveTransaction($preparedData);
            $this->paymentService->payPal($preparedData, $transaction);

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
