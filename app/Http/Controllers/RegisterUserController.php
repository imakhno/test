<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    /**
     * @return View
     */
    public function register(): View
    {
        return view('auth.register');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        $data = $request->validate([
            'name' => 'required|max:255|min:5|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed', Password::defaultAliases(),
        ]);

        $user = User::create($data);

        auth()->login($user);

        return redirect()->route('home');
    }
}
