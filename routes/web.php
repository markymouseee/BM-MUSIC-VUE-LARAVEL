<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Index'))
    ->middleware('redirect.auth.role');

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [AuthenticatedSessionController::class, 'create'])
        ->name('user.login');

    Route::get('/sign-up', [RegisteredUserController::class, 'create'])
        ->name('user.register');

    Route::post('/sign-in', [AuthenticatedSessionController::class, 'store'])
        ->name('user.login.store');

    Route::post('/sign-up', [RegisteredUserController::class, 'store'])
        ->name('user.register.store');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('user.logout')
    ->middleware(['auth']);

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => Inertia::render('User/DashboardUser'))
        ->name('user.dashboard');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', fn() => Inertia::render('User/DashboardUser'))
        ->name('admin.dashboard');
});

