<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Models\Client;
use App\Services\KlaviyoService;
use App\Services\QuizService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private KlaviyoService $klaviyoService;

    private QuizService $quizService;

    public function __construct(KlaviyoService $klaviyoService, QuizService $quizService)
    {
        $this->klaviyoService = $klaviyoService;
        $this->quizService = $quizService;
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
        $ad_name = session('ad_name');

        $client = Client::query()->where('code', $code)->first();

        if($client && $email) {
            $client->email = $email;
            $client->ad_name = $ad_name;
            $client->save();
        }

        $this->klaviyoService->sendClientData($client, ClientSteps::FINISHED_QUIZ->value);

        return response()->redirectToRoute('personal-plan', $code);
    }
}
