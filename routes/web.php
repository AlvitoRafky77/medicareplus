<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BMICalculatorController;
use App\Http\Controllers\LayananController;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/edit', [AuthController::class, 'edit_view'])->name('edit.form');
Route::post('/edit', [AuthController::class, 'edit'])->name('edit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/forums', ForumController::class)->middleware('auth');

Route::get('/bmi', [BMICalculatorController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BMICalculatorController::class, 'calculate'])->name('bmi.calculate');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
