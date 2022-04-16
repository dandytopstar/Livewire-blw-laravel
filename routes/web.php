<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front');
});

Route::get('quiz', function () {
    return view('quiz');
})->name('quiz');

Route::get('terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('policy', function () {
    return view('pages.policy');
})->name('policy');

Route::get('quiz-result/{code}', [QuizController::class, 'result'])->name('quiz-result');

Route::get('page/{slug}', [PageController::class, 'showPageBySlug'])->name('show-page-by-slug');


