<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterService
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('auth.register');
    }

    /**
     * @param array $data
     * @return User
     * @throws Exception
     */
    public function store(array $data): User
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            Auth::login($user);

            return $user;

        } catch (QueryException $queryException) {
            throw new Exception($queryException->getMessage());
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
