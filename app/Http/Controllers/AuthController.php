<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showFormResetPassword(Request $request)
    {
        $token = $request->get('token');
        $email = $request->get('email');

        return view('auth.passwords.reset', compact('token', 'email'));
    }
}
