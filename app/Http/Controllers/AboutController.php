<?php

namespace App\Http\Controllers;

use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

}
