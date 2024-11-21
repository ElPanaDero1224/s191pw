<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteControler extends Controller
{
    /**
     * Funcion para mostrar la vista de la consulta
     */
    public function index()
    {
        $consultaClientes= DB::table('cliente')->get();
        #va con comillas simples y sin el signo de pesos
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Funcion para mostrar el fomrulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Funcion para mostrar el fomrulario
     */
    public function home(){
        return view('inicio');
    }

    /**
     * Encargada de ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            'nombre'=> $request->input('txtnombre'),
            'apellido'=> $request->input('txtapellido'),
            'correo'=> $request->input('txtcorreo'),
            'telefono'=> $request->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutacacas');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();
        return view('actualizar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('cliente')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);

        $nombre = $request->input('txtnombre');
        return to_route('rutaconsulta')->with('exito', __("¡El cliente :nombre ha sido actualizado correctamente!", ['nombre' => $nombre]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cliente')->where('id', $id)->delete();
        return to_route('rutaconsulta')->with('exito', 'Cliente eliminado correctamente.');
    }
}
