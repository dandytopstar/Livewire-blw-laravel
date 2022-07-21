<?php

namespace App\Services;

use Klaviyo\Client;

class KlaviyoService
{
    private Client $client;

    private string $publicKey;

    public function __construct()
    {
        $this->publicKey = env('KLAVIYO_PUBLIC_KEY');

        $this->client = new Client(
            $this->publicKey,
            $num_retries = 3,
            $wait_seconds = 3
        );
    }

    /**
     * @param string $step
     * @param array $paymentData
     * @return string
     */
    public function sendClientData($client, $step, array $paymentData = []): string
    {
        $customProperties = [
            'email' => $client->email,
            'name' => $client->name,
            'code' => $client->code,
        ];

        $properties = [
            'step' => $step,
            ...$paymentData
        ];

        $clientDat = [
            'token' => $this->publicKey,
            'event' => 'Ordered Product',
            'customer_properties' => $customProperties,
            'properties'  => $properties,
        ];

        $data = json_encode($clientDat);

        try {
            $result = $this->client->TrackIdentify->trackPost($data);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return $result;
    }


}