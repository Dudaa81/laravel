<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos= [
             (object) ['nome'=> 'Duda', 'telefone' => '123', 'email'=> 'duda@gmail.com'],
             (object) ['nome'=> 'Eduarda', 'telefone' => '143', 'email'=> 'eduarda@gmail.com'],
             (object) ['nome'=> 'Queiroz', 'telefone' => '1321', 'email'=> 'queiroz@gmail.com']
        ];

        return view('aluno', compact('alunos'));
    }
}
