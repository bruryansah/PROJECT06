<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\GuruController; // ✅ Import GuruController

// ------------------ Home ------------------ //
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ------------------ Dashboard ------------------ //
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');

Route::get('/guru/dashboard', [GuruController::class, 'index'])
    ->middleware(['auth', 'guru'])
    ->name('guru.dashboard');

// ------------------ Settings ------------------ //
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// ------------------ Auth Routes ------------------ //
require __DIR__.'/auth.php';

// ------------------ Forget Password ------------------ //
Route::controller(ForgotPasswordController::class)->group(function () {
    // Form reset password (GET) kalau perlu
    Route::get('forget-password', 'showLinkRequestForm')->name('password.request');
    // Kirim email reset password (POST)
    Route::post('forget-password', 'sendResetLinkEmail')->name('password.email');
});

// ------------------ Reset Password ------------------ //
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});
