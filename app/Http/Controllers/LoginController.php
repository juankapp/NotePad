<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function logar(Request $request)
    {
        $dados = $request->validate( [
            'email' => 'required',
            'password' => 'required'
            ]
        );

        if(Auth::attempt($dados)) {
            return redirect('/menu');
        } else {
            $erro = "dados invalidos";
            return view('login', ['erro' => $erro]);
        }



    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request)
    {

        $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function deslogar() {
        Auth::logout();

       return redirect('/');
    }

}
