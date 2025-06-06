<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $fillable = [
            'cnpj',
            'senha',
            'telefone',
            'nome_loja',
            'email', 
        ];
   
}
