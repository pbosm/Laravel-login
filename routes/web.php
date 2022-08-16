<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'login'])->name('login.page'); //direcionando para o controller, acessar a pagina login.blade.php nna view

Route::post('/autenticacao', [UserController::class, 'autenticacao'])->name('autenticacao.user'); //Rota para receber a requisição do formulario

// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard.page');


