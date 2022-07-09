<?php

namespace App\Services;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;

class PersonalPlanService
{
    public function stripePayment(array $paymentData)
    {
        $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));

        try {

            $response = Token::create([
                "card" => [
                    "number"    => $paymentData['card_no'],
                    "exp_month" => $paymentData['expiry_month'],
                    "exp_year"  => $paymentData['expiry_year'],
                    "cvc"       => $paymentData['cvv']
                ]
            ]);

            if (!isset($response['id'])) {
                return redirect()->route('addmoney.paymentstripe');
            }

            $charge = Charge::create([
                'card' => $response['id'],
                'currency' => 'USD',
                'amount' =>  150 * 100,
                'description' => 'wallet',
            ]);

            $transaction = [
                'token_card' => $response['id'],
                'status' => $charge['status'],
            ];

            if($charge['status'] == 'succeeded') {
                return redirect('stripe')->with('success', 'Payment Success!');
            } else {
                return redirect('stripe')->with('error', 'something went to wrong.');
            }

        }
        catch (Exception $e) {
            return $e->getMessage();
        }
    }
}