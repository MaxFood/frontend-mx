<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('user/cadastro/cadastro');
    }


    public function salvar(Request $request){
        $nome = $request->input('nome');
        $sobrenome = $request->input('sobrenome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $senhaConfirmada = $request->input('senha_confirmada');
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $dataNascimento = $request->input('data_nascimento');

        if ($senha !== $senhaConfirmada) {
            return back()->withErrors(['senha' => 'As senhas não coincidem.']);
        }

        User::create([
            'name'            => ($nome . " " . $sobrenome),
            'email'           => $email,
            'senha'        => $senha, 
            'cpf'             => $cpf,
            'telefone'        => $telefone,
            'dataNascimento' => $dataNascimento
        ]);

        

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
