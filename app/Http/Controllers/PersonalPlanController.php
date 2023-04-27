<?php

namespace App\Http\Controllers;

use App\Enums\PaymentMethods;
use App\Models\PersonalPlan;
use App\Services\PersonalPlanService;
use Illuminate\Http\Request;
use App\Services\QuizService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PersonalPlanController extends Controller
{
    private QuizService $quizService;

    private PersonalPlanService $personalPlanService;

    public function __construct(QuizService $quizService, PersonalPlanService $personalPlanService)
    {
        $this->quizService = $quizService;
        $this->personalPlanService = $personalPlanService;
    }

    public function index(Request $request, $code): Factory|View|Application
    {
        $clientData['personalPlans'] = PersonalPlan::query()->get();
        $clientData['code'] = $code;

        return view('personal-plan', $clientData);
    }
}
