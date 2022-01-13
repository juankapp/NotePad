<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterarNotaRequest;
use App\Http\Requests\SalvarNotaRequest;
use Auth;
use App\Models\User;
use App\Models\Nota;


use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index() {
        $user = auth()->user();

        return view('dados', ['user' => $user]);

    }

    public function criando() {
        return view('criando');
    }

    public function criar(SalvarNotaRequest $request) {
        $user = auth()->user();
        $dados = new Nota;
        $dados->title = $request->title;
        $dados->text = $request->text;
        $dados->user_id = $user->id;
        $dados->save();



        return redirect('/menu');
    }

    public function show() {
        $user = auth()->user();
        $notas = Nota::where('user_id', $user->id)->paginate(4);
        return view('show', ['notas'=> $notas]);
    }

    public function editar($id) {
        $user = auth()->user();
        $nota = Nota::where("id", $id)->where("user_id", $user["id"])->first();
        if(!$nota) {
            abort(404);
        }
        return view('edit', ['nota'=> $nota]);
    }

    public function edit($id, AlterarNotaRequest $request) {
        $user = auth()->user();
        $nota = Nota::where("id", $id)->where("user_id", $user["id"])->first();
        if(!$nota) {
            abort(404);
        }
        $nota->title = $request->title;
        $nota->text = $request->text;
        $nota->user_id = $user->id;
        $nota->save();
        return redirect('/minhas-anotacoes');

    }

    public function delete($id) {
        $nota = Nota::findorfail($id)->delete();
        return redirect('/minhas-anotacoes');
    }
}
