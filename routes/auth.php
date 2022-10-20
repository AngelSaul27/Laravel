<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login' , function () {
        return view('auth.login');
    })->name('login');
    Route::get('/register' , function () {
        return view('auth.signup');
    })->name('register');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function (){
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
