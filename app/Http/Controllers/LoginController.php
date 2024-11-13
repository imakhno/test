<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    protected LoginService $loginService;

    /**
     * @param LoginService $loginService
     */
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * @return View
     */
    public function login(): View
    {
        return view('auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->validated();

        if ($this->loginService->store($request->email, $request->password)) {
            return redirect()->intended(route('home'));
        } else {
            return back()
                ->withInput()
                ->withErrors(['password' => 'Неверное имя пользователя или пароль']);
        }
    }
}
