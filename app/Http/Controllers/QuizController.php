<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QuizService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class QuizController extends Controller
{
    private QuizService $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    public function result(Request $request, $code): Factory|View|Application
    {
        $client = $this->quizService->getClientAnswersByCode($code);

        return view('quiz-result', compact('code', 'client'));
    }

    public function summary(Request $request, $code): Factory|View|Application
    {
        $clientData = $this->quizService->getBabySummary($code);

        return view('summary', $clientData);
    }
}
