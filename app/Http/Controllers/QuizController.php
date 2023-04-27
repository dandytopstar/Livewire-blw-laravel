<?php

namespace App\Http\Controllers;

use App\Enums\ClientSteps;
use App\Services\KlaviyoService;
use Illuminate\Http\Request;
use App\Services\QuizService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class QuizController extends Controller
{
    private QuizService $quizService;

    private KlaviyoService $klaviyoService;

    public function __construct(QuizService $quizService, KlaviyoService $klaviyoService)
    {
        $this->quizService = $quizService;
        $this->klaviyoService = $klaviyoService;
    }

    public function result(Request $request, $code): Factory|View|Application
    {
        $client = $this->quizService->getClientAnswersByCode($code);

        $this->klaviyoService->sendClientData($client, ClientSteps::FINISHED_QUIZ);

        return view('quiz-result', compact('code', 'client'));
    }

    public function summary(Request $request, $code): Factory|View|Application
    {
        return view('summary', compact('code'));
    }
}
