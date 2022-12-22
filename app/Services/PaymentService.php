<?php

namespace App\Services;

use Exception;
use Stripe\Token;
use Stripe\Charge;
use Stripe\Stripe;
use Omnipay\Omnipay;
use App\Models\Client;
use App\Models\Transaction;
use App\Models\PersonalPlan;
use App\Enums\PaymentMethods;
use Illuminate\Http\RedirectResponse;

class PaymentService
{

    /**
     * @param array $paymentData
     * @return array
     */
    public function preparePaymentData(array $paymentData): array
    {
        $personalPlan = PersonalPlan::query()->where('id', $paymentData['personal_plan_id'])->first();

        $paymentData['price'] = $personalPlan->payment_price;

        return $paymentData;
    }

    public function saveTransaction(array $paymentData)
    {
        return Transaction::create($paymentData);
    }

    public function updateTransaction($id, array $paymentData)
    {
        return Transaction::query()->where('id', $id)->update($paymentData);
    }

    public function getTransactionById(int $id)
    {
        return Transaction::query()->where('id', $id)->with('client')->first();
    }

    public function payPal($paymentData, $transaction)
    {
        $gateway = Omnipay::create('PayPal_Rest');
        $gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $gateway->setSecret(env('PAYPAL_APP_SECRET'));
        $gateway->setTestMode(env('PAYPAL_TEST_MODE'));

        try {
            $response = $gateway->purchase([
                'amount' => $paymentData['price'],
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('paypal-success',$transaction->id),
                'cancelUrl' => route('paypal-error',$transaction->id),
            ])->send();

            if($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}