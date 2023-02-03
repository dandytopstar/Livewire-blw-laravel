<?php

namespace App\Services;

use Exception;
use Omnipay\Omnipay;
use Ramsey\Uuid\Type\Decimal;
use Stripe\StripeClient;
use App\Models\Transaction;
use App\Models\PersonalPlan;


class PaymentService
{
    /**
     * @param array $paymentData
     * @return array
     */
    public function preparePaymentData(array $paymentData): array
    {
        $personalPlan = PersonalPlan::query()->where('id', $paymentData['personal_plan_id'])->first();

        $paymentData['personal_plan_name'] = $personalPlan->name;
        $paymentData['price'] = $personalPlan->billed_price;
        $paymentData['price_old'] = $personalPlan->billed_price_old;
        $paymentData['discount_price'] = $personalPlan->discount_price;
        $paymentData['stripe_id'] = $personalPlan->stripe_id;
        $paymentData['paypal_id'] = $personalPlan->paypal_id;
        $paymentData['discount'] = $personalPlan->discount;

        return $paymentData;
    }

    public function priceWithDiscount($price, $discount): float|int
    {
        return round($price * ($discount/100), 2);
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
        return Transaction::query()
            ->where('id', $id)
            ->with('client')
            ->with('personalPlan')
            ->first();
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

    public function stripe($client, $data)
    {
        $stripe = new StripeClient(config('services.stripe.secret'));

//        $intent = $stripe->paymentIntents->retrieve($data['intent_id']);
//
//        $charges = $intent->charges->data;

        $customer = $stripe->customers->create([
            'name' => $client->email,
            'email' => $client->email,
            'source' => $data['stripeToken'],
        ]);

        $customer_id = $customer->id;

        $subscription = $stripe->subscriptions->create([
            'customer' => $customer_id,
            'items' => [
                ['price' => $data['stripe_id']]
            ],
            'payment_behavior' => 'default_incomplete',
            'payment_settings' => ['save_default_payment_method' => 'on_subscription'],
            'expand' => ['latest_invoice.payment_intent'],
        ]);

        dd($subscription->latest_invoice->payment_intent->client_secret);

        return $subscription->status == 'active';
    }

    public function getStripeSubscription($client, $plan)
    {
        $stripe = new StripeClient(config('services.stripe.secret'));

        $customer = $stripe->customers->create([
            'email' => $client->email,
        ]);

        $subscription = $stripe->subscriptions->create([
            'customer' => $customer->id,
            'items' => [
                ['price' => $plan['stripe_id']]
            ],
            'payment_behavior' => 'default_incomplete',
            'payment_settings' => ['save_default_payment_method' => 'on_subscription'],
            'expand' => ['latest_invoice.payment_intent'],
        ]);

        return [
            'subscriptionId' => $subscription->id,
            'clientSecret' => $subscription->latest_invoice->payment_intent->client_secret,
            'intentId' => $subscription->latest_invoice->payment_intent->id,
        ];
    }


}