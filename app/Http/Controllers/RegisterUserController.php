<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Registration logic will go here
    }
}
