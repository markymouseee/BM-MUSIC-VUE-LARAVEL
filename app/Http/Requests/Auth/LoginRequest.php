<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username_or_email' => 'required|max:255',
            'password' => 'required',
        ];
    }

    public function authenticate()
    {
        $this->ensureNotRateLimited();

        $credentials = $this->only('username_or_email', 'password');

        $fieldType = filter_var($credentials['username_or_email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (!Auth::attempt([
            $fieldType => $credentials['username_or_email'],
            'password' => $credentials['password'],
        ])) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'username_or_email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }


    public function ensureNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());


        throw ValidationException::withMessages([
            'username_or_email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ])
        ]);
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')) . '|' . $this->ip());
    }
}
