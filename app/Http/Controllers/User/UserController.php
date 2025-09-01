<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function create(Request $request)
    {
        return Inertia::render('Auth/Register', [
            'status' => $request->session()->get('status'),
        ]);
    }
}
