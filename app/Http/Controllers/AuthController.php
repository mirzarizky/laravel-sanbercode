<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        return view('welcome', [
            'name' => $request->first_name.' '.$request->last_name
        ]);
    }
}
