<?php

namespace App\Http\Controllers;

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
}
