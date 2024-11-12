<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    protected RegisterService $registerService;

    /**
     * @param RegisterService $registerService
     */
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    /**
     * @return View
     */
    public function register(): View
    {
        return view('auth.register');
    }

    /**
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $request->validated();
        $this->registerService->register(
            $request->only(
                'name',
                'email',
                'password',
            ));

        return redirect(route('home'));
    }
}
