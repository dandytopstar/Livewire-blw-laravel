<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PersonalPlanController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/', 'main');
Route::view('quiz', 'quiz')->name('quiz');
//Route::view('terms', 'terms')->name('terms');
//Route::view('policy', 'policy')->name('policy');;

Route::get('quiz-result/{code}', [QuizController::class, 'result'])->name('quiz-result');
Route::get('summary/{code}', [QuizController::class, 'summary'])->name('summary');
Route::get('checkout/{code}', [PersonalPlanController::class, 'checkout'])->name('checkout');

Route::get('send/home-question-form', [MailController::class, 'sendHomeQuestionForm'])
    ->name('send.home-question-form');

//
//Route::get('page/{slug}', [PageController::class, 'showPageBySlug'])->name('show-page-by-slug');
