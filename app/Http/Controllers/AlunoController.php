<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function create(Request $dados){
        dd($dados->all());
        $aluno = \App\Models\AlunoModel();
    }

    function list(){

    }

    function update(Request $dados){

    }

    function delete(Request $dados){

    }
}
