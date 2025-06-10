<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaCadastroController extends Controller
{
    public function cadastroForm(){
        return view('loja/cadastro/cadastro');
    }
}
