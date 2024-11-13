<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $email
 * @property string $password
 */
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
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Адрес электронной почты обязателен для заполнения.',
            'email.email' => 'Пожалуйста, введите корректный адрес электронной почты.',
            'password.required' => 'Пароль обязателен для заполнения.',
            'password.min' => 'Пароль должен содержать не менее :min символов.',
        ];
    }

}
