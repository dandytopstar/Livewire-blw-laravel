<?php

namespace App\Http\Controllers;

use App\Services\QuizService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    private QuizService $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    public function result(Request $request, $code)
    {
        $client = $this->quizService->getClientAnswersByCode($code);

        return view('quiz-result', compact('code', 'client'));
    }
}
