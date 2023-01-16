<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Models\Client;
use App\Services\KlaviyoService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private KlaviyoService $klaviyoService;

    public function __construct(KlaviyoService $klaviyoService)
    {
        $this->klaviyoService = $klaviyoService;
    }

    public function registration(Request $request, $code)
    {
        $client = Client::query()->where('code', $code)->first();

        if(!empty($client->email)) {
            return response()->redirectToRoute('personal-plan', $code);
        }

        return view('registration', compact('code'));
    }

    public function createClient(Request $request)
    {
        $code = $request->get('code');
        $email =$request->get('email');

        $client = Client::query()->where('code', $code)->first();

        if($client && $email) {
            $client->email = $email;
            $client->save();
        }

        $this->klaviyoService->sendClientData($client, ClientSteps::FINISHED_QUIZ);

        return response()->redirectToRoute('personal-plan', $code);
    }
}
