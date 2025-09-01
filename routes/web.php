<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/sign-in', [LoginController::class, 'index'])
    ->name('user.login')
    ->middleware('guest');

Route::get('/sign-up', [UserController::class, 'index'])
    ->name('user.register')
    ->middleware('guest');
