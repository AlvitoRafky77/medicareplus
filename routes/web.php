<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BMICalculatorController;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('forums', ForumController::class)->middleware('auth');

Route::get('/bmi', [BMICalculatorController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BMICalculatorController::class, 'calculate'])->name('bmi.calculate');

