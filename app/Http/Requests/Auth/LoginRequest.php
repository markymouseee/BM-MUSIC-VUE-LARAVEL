<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

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

    public function messages(): array
    {
        return [
            'username_or_email.required' => 'Please enter your username or email address.',
            'username_or_email.max' => 'Your username or email address must not exceed 255 characters.',
            'password.required' => 'Please enter your password.',
        ];
    }
}
