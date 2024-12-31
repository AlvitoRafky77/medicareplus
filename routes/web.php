<?php
use App\Http\Controllers\ReminderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BMICalculatorController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HealthServiceController;
use App\Http\Controllers\QuizController;

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

Route::resource('forums', ForumController::class)->middleware('auth');
Route::get('/forums/{forum}/edit', [ForumController::class, 'edit'])->name('forums.edit');
Route::put('/forums/{forum}', [ForumController::class, 'update'])->name('forums.update');

Route::get('/bmi', [BMICalculatorController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BMICalculatorController::class, 'calculate'])->name('bmi.calculate');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/about', [LayananController::class, 'about'])->name('about');
Route::get('/artikel', [LayananController::class, 'artikel'])->name('artikel');

Route::get('/live-chat/dashboard', [ChatController::class, 'dashboardChat'])->name('chat.dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/live-chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/live-chat/send', [ChatController::class, 'send'])->name('chat.send');
});

Route::get('/pengingat', [ReminderController::class, 'showPengingat'])->name('pengingat');
Route::get('/jadwal', [ReminderController::class, 'showJadwal'])->name('jadwal');
Route::get('/kalender', [ReminderController::class, 'showKalender'])->name('kalender');

Route::get('/health-services', [HealthServiceController::class, 'index'])->name('health-services.index');

Route::get('/dashboard-quiz', [QuizController::class, 'dashboardQuiz'])->name('quiz.dashboard');
Route::get('/quiz', [QuizController::class, 'quizForm'])->name('quiz.form');
Route::get('/poin', [QuizController::class, 'showPoin'])->name('quiz.poin');
