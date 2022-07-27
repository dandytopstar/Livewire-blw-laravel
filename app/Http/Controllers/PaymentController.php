<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Models\Transaction;
use App\Services\KlaviyoService;
use App\Services\PaymentService;
use App\Services\QuizService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function payment(Request $request)
    {
        $paymentData = $request->all();

        $preparedData = $this->paymentService->preparePaymentData($paymentData);

        if($preparedData['method'] == 'stripe') {

            $result = $this->paymentService->stripePayment($preparedData);

            $client = $this->quizService->getClientByCode($result['client_code']);

            $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $result);

            return redirect()->route('payment-result', [$result['id'], $result['client_code']]);
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
        $data = $this->paymentService->getTransactionById($id);

        return view('payment-result', compact('id', 'data'));
    }

    public function payPalSuccess(Request $request, $id)
    {
        $payPalResult = $request->all();

        $this->paymentService->updateTransaction($id, [
            'status' => 'succeeded',
            'payment_data' => $payPalResult
        ]);

        $result = $this->paymentService->getTransactionById($id)->toArray();

        $client = $this->quizService->getClientByCode($result['client_code']);

        $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $result);

        return redirect()->route('payment-result', [$result['id'], $result['client_code']]);
    }

    public function payPalError(Request $request, $id)
    {
        $payPalResult = $request->all();

        $this->paymentService->updateTransaction($id, [
            'payment_data' => $payPalResult
        ]);

        $result = $this->paymentService->getTransactionById($id)->toArray();

        $client = $this->quizService->getClientByCode($result['client_code']);

        $this->klaviyoService->sendClientData($client, ClientSteps::ORDERED_PERSONAL_PLAN, $result);

        return redirect()->route('payment-result', [$result['id'], $result['client_code']]);
    }
}
