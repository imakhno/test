<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Mockery\Exception;

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
    public function index(): View
    {
        return $this->registerService->index();
    }

    /**
     * @param RegisterRequest $registerRequest
     * @return RedirectResponse
     */
    public function store(RegisterRequest $registerRequest): RedirectResponse
    {
        $registerRequest->validated();

        try {

            $this->registerService->store($registerRequest->only(
                'name',
                'surname',
                'email',
                'password',
            ));

            return redirect()->route('home')->with('success', 'Регистрация прошла успешно!');

        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['error' => $exception->getMessage()]);
        }

    }
}
