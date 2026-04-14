<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function adicionar(Request $dados){
        $aluno = new \App\Models\AludoModel();
        $aluno::create($dados->all());
        return view('aluno.index', ['sucesso'=> 'Foi botado!']);
    }

    function remover(){

    }

    function atualizar(){

    }

    function consultar(){

    }
}
