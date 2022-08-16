<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() //caminho para acessar a view login.blade.php
    { 
        return view('login');
    }

    // public function dashboard(){ //caminho para acessar a view dashboard.blade.php
    //     return view('dashboard');
    // }

    public function autenticacao(Request $request) //sempre que o metodo for post tem que receber a variavel $request
    { 
        $this->validate($request,[   //Validação para ver se usuário não deixou os campos em branco.
            'email' => 'required',
            'password' => 'required'
        ],[                          //Alterando a mensagem de erro para o usuário.
            'email.required' => 'E-mail vazio, favor preencher!', 
            'password.required' => 'Senha é obrigatório, favor preencher!',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) { //validação do email e senha
            dd('Usuário logado');
        } else {
            return redirect()->back()->with('danger', 'E-mail ou senha inválidos!'); //else para caso email ou senha seja invalidas.
        }
    }

}
