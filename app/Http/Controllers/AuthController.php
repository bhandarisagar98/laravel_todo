<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validateddata = $request->validate([
            'name_oftheuser' => 'required|string|max:70',
            'email' => 'required|email|max:100',
            'password' => 'required|password|max:75',
            'security_question' => 'required|string|max:255',
            'security_answer' => 'required|string|max:75'
        ]);

        $register = new User();
        $register->store($validateddata);
    }
}
