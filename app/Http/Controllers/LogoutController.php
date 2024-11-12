<?php

namespace App\Http\Controllers;

use App\Services\LogoutService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LogoutController extends Controller
{
    protected LogoutService $logoutService;

    /**
     * @param LogoutService $logoutService
     */
    public function __construct(LogoutService $logoutService)
    {
        $this->logoutService = $logoutService;
    }

    /**
     * @return View
     */
    public function destroy(): View
    {
        $this->logoutService->destroy();

        return view('welcome');
    }

}
