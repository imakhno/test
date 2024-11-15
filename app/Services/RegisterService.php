<?php

namespace App\Services;

use App\Models\User;
use App\Services\DTO\RegisterNewUserDTO;
use Exception;
use Illuminate\Database\QueryException;
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
     * @param RegisterNewUserDTO $registerNewUserDTO
     * @return User
     * @throws Exception
     */
    public function store(RegisterNewUserDTO $registerNewUserDTO): User
    {
        try {

            $user = User::create([
                'name' => $registerNewUserDTO->getName(),
                'surname' => $registerNewUserDTO->getSurname(),
                'email' => $registerNewUserDTO->getEmail(),
                'password' => Hash::make($registerNewUserDTO->getPassword()),
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
