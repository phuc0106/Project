<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Show view login
     */
    public function showLogin () 
    {
        return view('auth.login');
    }

    /**
     * Login
     */
    public function login (LoginRequest $request) 
    {

    }

    /**
     * Logout
     */
    public function logout () 
    {

    }
}
