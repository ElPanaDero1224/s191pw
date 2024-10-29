<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador;

class vistas extends Controller
{
   
    public function menu(){
        return view('Principal');
    }

    public function registro(){
        return view('Registro');
    }


    public function formularioRegistro(validador $request){

        $datos = $request->all();
        return view('Registro', compact('datos'));
    }

}
