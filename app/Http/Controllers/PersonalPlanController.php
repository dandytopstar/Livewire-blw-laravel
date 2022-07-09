<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QuizService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PersonalPlanController extends Controller
{
    private QuizService $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    public function personalPlan(Request $request, $code): Factory|View|Application
    {
        $client = $this->quizService->getClientByCode($code);

        return view('personal-plan', compact('code', 'client'));
    }

    public function checkout(Request $request, $code): Factory|View|Application
    {
        $client = $this->quizService->getClientByCode($code);

        return view('checkout', compact('code', 'client'));
    }

    public function payment(Request $request)
    {
        $request->dd();
    }
}
