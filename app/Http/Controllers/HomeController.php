<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //el metodo __invoke es para cuando queremos que el coontrolador administre una sola ruta
    public function __invoke()
    {
        //return view('Welcome');  
        return view('home');
    }
}
