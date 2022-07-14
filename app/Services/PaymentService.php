<?php

namespace App\Services;

use Exception;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;
use App\Models\Client;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;

class PaymentService
{
    /**
     * @param array $paymentData
     * @return array|string|RedirectResponse
     */
    public function stripePayment(array $paymentData): array|string|RedirectResponse
    {
        $stripe = Stripe::setApiKey(config('payment.stripe_secret'));

        try {

            $token = Token::create([
                "card" => [
                    "number"    => $paymentData['card_no'],
                    "exp_month" => $paymentData['expiry_month'],
                    "exp_year"  => $paymentData['expiry_year'],
                    "cvc"       => $paymentData['cvv']
                ]
            ]);

            if (isset($token['id'])) {
                $paymentData['status'] = 'wrong';
                $result =  $this->saveTransaction($paymentData);
                return $result->toArray();
            }

            $charge = Charge::create([
                'card' => $token['id'],
                'currency' => 'USD',
                'amount' =>  $paymentData['price'] * 100,
                'description' => 'wallet',
            ]);

            $paymentData['status'] = $charge['status'];

            $result =  $this->saveTransaction($paymentData);

            return $result->toArray();
        }
        catch (Exception $e) {
            dd($e->getMessage());
            return $e->getMessage();
        }
    }

    /**
     * @param array $paymentData
     * @return array
     */
    public function preparePaymentData(array $paymentData): array
    {
        $data = [];

        $expiry = explode(' / ', $paymentData['expiry']);

        $data['card_no'] = str_replace(' ', '', $paymentData['card_no']);

        $data['card_name'] = $paymentData['card_name'];

        $data['expiry_month'] = $expiry[0];

        $data['expiry_year'] = $expiry[1];

        $data['cvv'] = $paymentData['cvv'];

        $data['price'] = $paymentData['price'];

        $data['plan'] = $paymentData['plan'];

        $data['method'] = $paymentData['method'];

        $data['client_code'] = $paymentData['client_code'];

        $client = Client::query()->where('code', $data['client_code'])->first();

        $data['client_id'] = $client->id;

        return $data;
    }

    public function saveTransaction(array $paymentData)
    {
        return Transaction::create($paymentData);
    }

    public function getTransactionById(int $id)
    {
        return Transaction::find($id);
    }
}