<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegisterUserController;

Route::view('/', 'welcome')->name('index');
Route::view('/home', 'home')->name('home');

Route::get('/register', [RegisterUserController::class, 'register'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
Route::get('/login', [LoginUserController::class, 'login'])->name('login');
Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');
