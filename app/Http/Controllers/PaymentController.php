<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
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

        return back();
    }

    public function paymentResult(Request $request, $id)
    {
        $data = $this->paymentService->getTransactionById($id);

        return view('payment-result', compact('id', 'data'));
    }
}
