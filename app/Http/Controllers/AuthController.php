<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin()
    {
        return view('auth.signin', [
            'page_active' => 'signin',
        ]);
    }

    public function signup()
    {
        return view('auth.signup', [
            'page_active' => 'signup',
        ]);
    }
}
