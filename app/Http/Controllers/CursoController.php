<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo principal para mostras el home
    public function index(){
        return view('cursos.index');
    }

    //metodo para crear formulario
    public function create(){ 
        return view('cursos.create');
    }

    //metodo para mostrar un metodo en particular
    public function show($curso){

        //compact('curso'); //['curso' => $curso]

        return view('cursos.show', compact('curso'));
    }

}
 