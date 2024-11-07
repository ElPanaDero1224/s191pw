<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\utilesValidaciones;

class controladorExamen extends Controller
{
    public function utilesVista(){
        return view("utilesEscolares");
    }

    public function subirFormulario(utilesValidaciones $request){

        $nombre = $request->input("nombre");
        $marca = $request->input("marca");

        session() -> flash("exito", 'Se guardo:' . $nombre .' '. $marca);


        return to_route("utilesVista");
}

}
