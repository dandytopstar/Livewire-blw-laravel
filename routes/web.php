<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PersonalPlanController;
use App\Http\Controllers\SubscriptionController;

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
Route::view('welcome', 'welcome');

//Route::view('terms', 'terms')->name('terms');
//Route::view('policy', 'policy')-

//redesign
//-----------------

Route::view('/', 'main')->name('main');

Route::view('quiz', 'quiz')->name('quiz');

Route::view('subscription', 'subscription')->name('subscription');

Route::post('subscription-send', [SubscriptionController::class, 'subscriptionSend'])->name('subscription-send');

Route::view('subscription-email-sent', 'subscription-email-sent')->name('subscription-email-sent');

Route::get('quiz-result/{code}', [QuizController::class, 'result'])->name('quiz-result');

Route::get('summary/{code}', [QuizController::class, 'summary'])->name('summary');

Route::get('registration/{code}', [ClientController::class, 'registration'])->name('registration');

Route::post('create-client', [ClientController::class, 'createClient'])->name('create-client');

Route::get('personal-plan/{code}', [PersonalPlanController::class, 'index'])->name('personal-plan');

Route::get('checkout/{code}', [PersonalPlanController::class, 'checkout'])->name('checkout');

Route::get('payment/{code}/{personalPlan}', [PaymentController::class, 'index'])->name('payment');

Route::post('payment', [PaymentController::class, 'payment'])->name('payment');

Route::get('payment-result/{id}/{code}', [PaymentController::class, 'paymentResult'])->name('payment-result');

Route::get('paypal-success/{id}', [PaymentController::class, 'payPalSuccess'])->name('paypal-success');

Route::get('paypal-error/{id}', [PaymentController::class, 'payPalError'])->name('paypal-error');

Route::get('send/home-question-form', [MailController::class, 'sendHomeQuestionForm'])
    ->name('send.home-question-form');

Route::fallback(function () {
    return redirect()->route('main');
});

