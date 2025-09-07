<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisteredUserController extends Controller
{

    /**
     * Summary of create
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Auth/Register', [
            'status' => $request->session()->get('status')
        ]);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Auth\RegistrationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegistrationRequest $request)
    {

        if (!User::create($request->validated())) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->route('user.login')->with('status', 'Your account has been created. Please login');
    }
}
