<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class HomeController extends Controller
{

    public function index() {

        

        $lojas = Loja::all();
        return view('user/home/home', ['lojas'=>$lojas]);
    }
}
