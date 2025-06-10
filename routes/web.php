<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LojaCadastroController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'index']);


//login
Route::get('/login', [LoginController::class, 'loginForm']);

Route::post('/login', [LoginController::class, 'login'])->name('login.entrar');

//cadastro
Route::get('/cadastro', [CadastroController::class, 'cadastro']);

Route::post('/cadastro/salvar', [CadastroController::class, 'salvar'])->name('cadastro.salvar');

//cart
Route::get('/cart', [CartController::class, 'cart']);



//----Lojas----

Route::get('/loja/cadastro', [LojaCadastroController::class, 'cadastroForm']);