<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    private PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function payment(Request $request)
    {
        $paymentData = $request->all();

        $preparedData = $this->paymentService->preparePaymentData($paymentData);

        if($preparedData['method'] == 'stripe') {

            $result = $this->paymentService->stripePayment($preparedData);

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
