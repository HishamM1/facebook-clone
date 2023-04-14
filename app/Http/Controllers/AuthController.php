<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function loginForm()
    {
        return inertia('Auth/Login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=> ['required','email','string','exists:users,email'],
            'password'=> ['required','string']
        ]);
        if (Auth::attempt($request->only('email', 'password')))
        {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }


    public function register(Request $request)
    {
        $user = $request->validate([
            'first_name'=> ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','email','string','unique:users,email'],
            'birth_date' => ['required','date'],
            'gender' => ['required','string','in:male,female'],
            'password'=> ['required','string'],
        ]);
        

        User::create($user);
        return redirect()->route('login.form');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.form');
    }
}
