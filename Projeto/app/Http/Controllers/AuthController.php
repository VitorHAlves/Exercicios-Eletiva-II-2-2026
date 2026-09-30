<?php

namespace App\Http\Controllers;
use Illuminate\Supprt\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'login' => "As credenciais forncedias estão incorretas!"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
