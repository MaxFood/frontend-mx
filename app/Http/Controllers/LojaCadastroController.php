<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LojaCadastroController extends Controller
{
    public function cadastroForm()
    {
        return view('loja/cadastro/cadastroloja');      
    }

    public function salvar(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = password_hash(trim($request->input('senha')), PASSWORD_DEFAULT);
        $cnpj = $request->input('cnpj');
        $telefone = $request->input('telefone');
        $enderecos = $request->input('endereco');
        $cep = $request->input('cep');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $complemento = $request->input('complemento');
        $numero = $request->input('numero');

        // Conexão com o banco usando DB do Laravel
        $pdo = DB::connection()->getPdo();

        // Inserir endereço
        $sqlEnderecos = "INSERT INTO enderecos (endereco, cep, cidade, estado, numero, complemento)
                        VALUES (:endereco, :cep, :cidade, :estado, :numero, :complemento)";
        $stmt = $pdo->prepare($sqlEnderecos);
        $stmt->execute([
            ':endereco'    => $enderecos,
            ':cep'         => $cep,
            ':cidade'      => $cidade,
            ':estado'      => $estado,
            ':numero'      => $numero,
            ':complemento' => $complemento
        ]);

        $id_endereco = $pdo->lastInsertId();

        // Inserir loja
        $sqlLoja = "INSERT INTO lojas (nome_loja, email, senha, cnpj, telefone, id_endereco)
                    VALUES (:nome_loja, :email, :senha, :cnpj, :telefone, :id_endereco)";
        $stmt = $pdo->prepare($sqlLoja);
        $stmt->execute([
            ':nome_loja'   => $nome,
            ':email'       => $email,
            ':senha'       => $senha,
            ':cnpj'        => $cnpj,
            ':telefone'    => $telefone,
            ':id_endereco' => $id_endereco
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
