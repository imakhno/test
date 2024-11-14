<?php

namespace App\Services;


use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Mockery\Exception;

class LoginService
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function store($email, $password): bool
    {
        return Auth::guard('web')->attempt([
            'email' => $email,
            'password' => $password,
        ]);
    }
}
