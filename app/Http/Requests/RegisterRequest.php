<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

/**
 * @property string $name;
 * @property string $email;
 * @property string $password;
 */
class RegisterRequest extends FormRequest
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
            'name' => 'required|max:30|string',
            'email' => 'required|min:5|max:30|string|unique:users',
            'password' => 'required|min:8|confirmed', Password::defaultAliases(),
            'password_confirmation' => 'required',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.string' => 'Имя должно быть строкой.',
            'name.max' => 'Имя не должно превышать :max символов.',

            'email.required' => 'Адрес электронной почты обязателен для заполнения.',
            'email.email' => 'Пожалуйста, введите корректный адрес электронной почты.',
            'email.unique' => 'Этот адрес электронной почты уже занят.',

            'password.required' => 'Пароль обязателен для заполнения.',
            'password.min' => 'Пароль должен содержать не менее :min символов.',
            'password.confirmed' => 'Пароли не совпадают.',

            'password_confirmation.required' => 'Повтор пароля обязателен для заполнения.',
        ];
    }
}
