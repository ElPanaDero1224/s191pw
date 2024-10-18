<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    
    public function inicio(){
        return view('inicio');
    }

    public function repaso1(){
        return view('repaso1');
    }

    //Funcion para convertir de mb a gb
    public function deMBaGB(Request $request){
        $mb = $request->input('dato');
        $gb = $mb / 1024;
        $gb = number_format($gb, 3);
        $resultado = "$mb MB es igual a $gb GB";
        return view('repaso1', ['resultado' => $resultado]);
    }

    //Funcion para convertir de gb a mb
    public function deGBaMB(Request $request){
        $gb = $request->input('dato1');
        $mb = $gb * 1024;
        $mb = number_format($mb, 3);
        $resultado = "$gb GB es igual a $mb MB";
        return view('repaso1', ['resultado' => $resultado]);
    }

        //Funcion para convertir de tb a gb
        public function deTBaGB(Request $request){
            $tb = $request->input('dato2');
            $gb = $tb * 1024;
            $gb = number_format($gb, 3);
            $resultado = "$tb TB es igual a $gb GB";
            return view('repaso1', ['resultado' => $resultado]);
        }


        //Funcion para convertir de mb a gb
        public function deGBaTB(Request $request){
        $gb = $request->input('dato3');
        $tb = $gb / 1024;
        $tb = number_format($tb, 3);
        $resultado = "$gb GB es igual a $tb TB";
        return view('repaso1', ['resultado' => $resultado]);
    }



}
