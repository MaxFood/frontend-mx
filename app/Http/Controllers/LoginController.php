<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('user/login/login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Login OK: redireciona para home (ou onde quiser)
            return redirect()->intended('/')->with('success', 'Login efetuado com sucesso!');
        }

        // Login falhou: volta para a página de login com erro
        return back()->withErrors([
            'email' => 'E-mail ou senha incorretos.',
        ]);
    }
}
