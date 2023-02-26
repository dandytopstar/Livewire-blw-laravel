<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getEbook()
    {
        $file = public_path('files/e-book.pdf');

        return response()->download($file);
    }

    public function getMealPlan()
    {
        $file = public_path('files/meal-plan.pdf');

        return response()->download($file);
    }

    public function showEbook()
    {
        return response()->make(file_get_contents('files/e-book.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);
    }

    public function showMealPlan()
    {
        return response()->make(file_get_contents('files/meal-plan.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);
    }
}
