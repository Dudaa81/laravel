<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function mostrar(){
        $professores= [
             (object) ['nome'=> 'diogo', 'telefone' => '1153'],
             (object) ['nome'=> 'amauri', 'telefone' => '14153' ]
        ];

        return view('professor', compact('professores'));
    }
}
