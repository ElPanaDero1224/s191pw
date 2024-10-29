<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistas extends Controller
{
   
    public function menu(){
        return view('Principal');
    }

    public function registro(){
        return view('Registro');
    }


    public function formularioRegistro(Request $request){
        return $request->all();
    }

}
