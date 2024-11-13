<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class LoginService
{
//    /**
//     * @param LoginRequest $request
//     * @return RedirectResponse
//     */
//    public function login(LoginRequest $request): RedirectResponse
//    {
//        if (Auth::guard('web')->attempt([
//            'email' => $request->email,
//            'password' => $request->password,
//        ])) {
//            return redirect()->intended(route('home'));
//        } else {
//            return back()->withErrors([
//                'email' => 'Error',
//            ]);
//        }
//    }
    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function store($email, $password): bool
    {
        try {
            return Auth::guard('web')->attempt([
                'email' => $email,
                'password' => $password,
            ]);
        } catch (QueryException $exception) {
            return $exception->getMessage();
        }
    }
}
