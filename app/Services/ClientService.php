<?php


namespace App\Services;


use App\Models\Client;
use Illuminate\Support\Str;
use App\Models\ClientSetting;

class ClientService
{
    public function create($request)
    {
        $frontendData = $request->all();

        if (!empty($frontendData['data'])) {
            $clientData = $request->client;
            $selected_values = $frontendData['data'];
            $selected_values['gender'] = $selected_values['q1'][0];

            $clientData['country'] = trans('front.country');
            $clientData['unit_system'] = 'imperial';
            $clientData['height'] = number_format(5 + 5 * 0.083, 2);

            $clientData['age'] = $selected_values['age'];
            $clientData['weight'] = 200;
            $clientData['target_weight'] = 150;
            $clientData['gender'] = $selected_values['gender'];
            $clientData['name'] = $selected_values['name'];
            $clientData['code'] = Str::uuid();

            $client = Client::create($clientData);

            foreach ($selected_values as $field => $value) {
                if ($field === 'gender' || $field === 'age' || $field === 'height' || $field === 'weight' || $field === 'desired_weight' || $field === 'measurements') {
                    continue;
                }

                $client->settings()->create([
                    'field' => $field,
                    'value' => is_array($value) ? implode(";", $value) : $value
                ]);
            }

            $client->settings()->create([
                'field' => 'ip_address',
//                'value' => getIP()
                'value' => 'localhost'
            ]);

            return response()->json([
                'status' => true,
                'client' => $client
            ])->withCookie(cookie('client_code', $client->code, 60 * 24 * 30));
        } else {
            die();
        }
    }

    public function findByCode($code)
    {
        return Client::where('code', $code)->get()->first();
    }

    public function getClientSettingsByClientId(Int $clientId)
    {
        return $clientSettingsData = ClientSetting::where('client_id', $clientId)->get();
    }

    public function getClientSettingsTransformedArray(Int $clientId)
    {
        $clientSettingsData = $this->getClientSettingsByClientId($clientId)->toArray();

        $clientSettingsArray = [];

        foreach ($clientSettingsData as $row) {
            $clientSettingsArray[$row['field']] = $row['value'];
        }

        return $clientSettingsArray;

    }
}
