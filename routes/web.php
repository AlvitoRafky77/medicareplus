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

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/edit', [AuthController::class, 'edit_view'])->name('edit.form');
Route::post('/edit', [AuthController::class, 'edit'])->name('edit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('forums', ForumController::class);
Route::get('/forums/{forum}/edit', [ForumController::class, 'edit'])->name('forums.edit');
Route::put('/forums/{forum}', [ForumController::class, 'update'])->name('forums.update');

Route::get('/bmi', [BMICalculatorController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BMICalculatorController::class, 'calculate'])->name('bmi.calculate');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/about', [LayananController::class, 'about'])->name('about');
Route::get('/artikel', [LayananController::class, 'artikel'])->name('artikel');
