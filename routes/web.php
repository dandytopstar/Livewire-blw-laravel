<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('front');
});

Route::get('old', function () {
    return view('index');
});

Route::get('quiz', [ClientController::class, 'quiz'])->name('quiz');
Route::get('join/{code}', [ClientController::class, 'join'])->name('result');
Route::get('get-plan/{code}', [ClientController::class, 'getPlan'])->name('get-plan');

Route::post('save-quiz', [ClientController::class, 'saveQuiz'])->name('save-quiz');


