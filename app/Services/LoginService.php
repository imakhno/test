<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(route('home'));
        } else {
            return back()->withErrors([
                'email' => 'Error',
            ]);
        }
    }
}
