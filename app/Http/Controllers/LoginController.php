<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Mockery\Exception;

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
    public function index(): View
    {
        return $this->loginService->index();
    }

    public function store(LoginRequest $loginRequest): RedirectResponse
    {
        if ($this->loginService->store($loginRequest->email, $loginRequest->password)) {
            return redirect()->route('home');
        }

        return back()->withInput()->withErrors([
            'password' => 'Неверный email или пароль.',
        ]);
    }

}
