<?php

namespace App\Http\Controllers;

use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout/home');
    }

}
