<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [AuthenticatedSessionController::class, 'create'])
        ->name('user.login');

    Route::get('/sign-up', [UserController::class, 'create'])
        ->name('user.register');


    Route::post('/sign-in', [AuthenticatedSessionController::class, 'store'])
        ->name('user.login.store');
});
