<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ConfirmablePasswordController;
use App\Http\Controllers\Admin\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\EmailVerificationPromptController;
use App\Http\Controllers\Admin\NewPasswordController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\PasswordResetLinkController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register-admin', [RegisteredUserController::class, 'create'])
                ->name('register-admin');

    Route::post('register-admin', [RegisteredUserController::class, 'store'])->name('register-admin.store');

    Route::get('login-admin', [AuthenticatedSessionController::class, 'create'])
                ->name('login-admin');

    Route::post('login-admin', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password-admin', [PasswordResetLinkController::class, 'create'])
                ->name('password-admin.request');

    Route::post('forgot-password-admin', [PasswordResetLinkController::class, 'store'])
                ->name('password-admin.email');

    Route::get('reset-password-admin/{token}', [NewPasswordController::class, 'create'])
                ->name('password-admin.reset');

    Route::post('reset-password-admin', [NewPasswordController::class, 'store'])
                ->name('password-admin.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email-admin', EmailVerificationPromptController::class)
                ->name('verification-admin.notice');

    Route::get('verify-email-admin/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification-admin.verify');

    Route::post('email-admin/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification-admin.send');

    Route::get('confirm-password-admin', [ConfirmablePasswordController::class, 'show'])
                ->name('password-admin.confirm');

    Route::post('confirm-password-admin', [ConfirmablePasswordController::class, 'store']);

    Route::put('password-admin', [PasswordController::class, 'update'])->name('password-admin.update');

    Route::post('logout-admin', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout-admin');
});
