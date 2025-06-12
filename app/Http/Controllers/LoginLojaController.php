<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginLojaController extends Controller
{
    public function loginlojaForm()
    {
        return view('/loja/login/loginloja');      
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'CNPJ' => ['required', 'cnpj'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Login OK: redireciona para home (ou onde quiser)
            return redirect()->intended('/')->with('success', 'Login efetuado com sucesso!');
        }

        // Login falhou: volta para a página de login com erro
        return back()->withErrors([
            'cnpj' => 'CNPJ ou senha incorretos.',
        ]);
    }
}
