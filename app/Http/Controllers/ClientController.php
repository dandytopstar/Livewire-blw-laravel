<?php

namespace App\Http\Controllers;

use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function quiz(Request $request, $gender)
    {
        return view('quiz', ['gender' => $gender]);
    }

    public function saveQuiz(Request $request)
    {
        return $this->clientService->create($request);
    }

    public function join(Request $request, $code)
    {
        $client = $this->clientService->findByCode($code);
        $clientSettingsCollection = $this->clientService->getClientSettingsByClientId($client->id);
        $clientSettings = $this->clientService->getClientSettingsTransformedArray($client->id);
        $similarSuccess = trans('join.similar_success');

        $render = [
            'client' => $client,
            'clientCode' => $client->code,
            'client_activity_level' => 1,
            'client_unit_system' => 'imperial',
            'client_weight' => $client->weight,
            'client_height' => $client->height,
            'client_age' => $client->age,
            'client_willingness' => 1,
            'bmi' => '25.6',
            'bmiResult' => '25.2',
            'bmiPosition' => 'position-2',
            'achievableWeight' => 100,
            'weight_unit' => 'lbs',
            'weight_loss_week_1' => '5',
            'weight_loss_week_2' => '5',
            'weight_loss_week_3' => '5',
            'weight_loss_week_4' => '5',
            'caloriesFrom' => '1625',
            'caloriesTo' => '1955',
            'waterIntake' => '3',
            'clientSettings' => $clientSettingsCollection,
            'appsToLearn' => '',
            'learningStyle' => '',

        ];

        return view('join', ['render' => $render]);
    }

    public function getPlan(Request $request, $code)
    {
        return view('get-plan');
    }
}
