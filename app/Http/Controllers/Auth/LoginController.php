<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{

    public function index()
    {
        if (!Auth::guard('user')->check()) {
            return Inertia::render('Auth/Login');
        }
        return Inertia::render('User/Dashboard/Home');
    }
}
