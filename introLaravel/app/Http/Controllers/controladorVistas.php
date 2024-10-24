<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');

    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){

        //Respuesta a la peticion post
        //return 'La info del cliente llego al controlador';
        //redireccion
        //return $peticion->all();

        //redireccion usando la ruta
        //return redirect('/');

        //redireccion usando el nombre de ruta

        //return redirect()->route('rutaconsulta');

        //Redireccion al origen de la peticion
        //return back();

        //redireccion con valores adjunto (variables, arreglos etc...)
        //$id= [['usuario'=>'1'], ['usuario'=>'2']];
        //return view('formulario', compact('id'));

        //redireccion enviando msj en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutacacas');

    }


}
