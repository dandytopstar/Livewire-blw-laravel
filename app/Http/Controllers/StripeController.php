<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        $this->validate($request, [
            'card_no' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
        ]);

        dd($request->all());

        $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));

        try {

            $response = Token::create(array(

                "card" => array(
                    "number"    => $request->input('card_no'),
                    "exp_month" => $request->input('expiry_month'),
                    "exp_year"  => $request->input('expiry_year'),
                    "cvc"       => $request->input('cvv')
                )));

            if (!isset($response['id'])) {
                return redirect()->route('addmoney.paymentstripe');
            }

            $charge = Charge::create([
                'card' => $response['id'],
                'currency' => 'USD',
                'amount' =>  150 * 100,
                'description' => 'wallet',
            ]);

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
