<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignin()
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        // Handle signin logic
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        // Handle signup logic
    }

    public function showResetPassword()
    {
        return view('auth.reset_password');
    }
}