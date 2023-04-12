<?php

use App\Http\Controllers\FileController;
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

Route::view('terms', 'terms')->name('terms');
Route::view('policy', 'policy')->name('policy');

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

Route::post('payment-stripe', [PaymentController::class, 'paymentStripeResult'])->name('payment-stripe-result');

Route::view('payment-stripe', 'stripe-result');

Route::get('paypal-success/{id}', [PaymentController::class, 'payPalSuccess'])->name('paypal-success');

Route::get('paypal-error/{id}', [PaymentController::class, 'payPalError'])->name('paypal-error');

Route::get('send/home-question-form', [MailController::class, 'sendHomeQuestionForm'])
    ->name('send.home-question-form');

Route::get('/asdwrgqwdqsdasdad', [FileController::class, 'getEbook']);

Route::get('/weq6eqw8rqwrqwdqw', [FileController::class, 'getMealPlan']);

Route::get('/e-book-pdf', [FileController::class, 'showEbook'])->name('show-e-book');

Route::get('/meal-plan-pdf', [FileController::class, 'showMealPlan'])->name('show-meal-plan');

Route::get('/5qpge23personal44232dietqpfform99675', [FileController::class, 'showEbookPdf']);

Route::get('/6mptt4485custom8fqmealplan7761', [FileController::class, 'showMealPlanPdf']);

Route::fallback(function () {
    return redirect()->route('main');
});

