<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\QuizController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('reset-password');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('reset-password');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->middleware('role:admin');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('role:user');

    Route::get('/admin/add-class', [ClassController::class, 'addClass'])->middleware('role:admin');
    Route::post('/admin/add-class', [ClassController::class, 'addClass'])->name('add-class');

    Route::get('/admin/add-quiz', [QuizController::class, 'addQuiz'])->middleware('role:admin');
    Route::post('add-quiz', [QuizController::class, 'addQuiz'])->name('add-quiz');

    Route::get('/quiz', [QuizController::class, 'quiz'])->name('quiz')->middleware('role:user');
    Route::post('/submit-quiz', [QuizController::class, 'submitQuiz'])->name('submit-quiz');
});
