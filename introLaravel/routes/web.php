<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\clienteControler;


Route::get('/cliente/create',[clienteControler::class,'create'])->name('rutacacas');

Route::post('/Cliente', [clienteControler::class, 'store'])->name('rutaenvia');


Route::get('/',[clienteControler::class,'home'])->name('rutainicio');


Route::get('/cliente',[clienteControler::class,'index'])->name('rutaconsulta');

Route::get('/actualizar/{id}/edit',[clienteControler::class,'edit'])->name('rutaActualizar');

Route::put('/cliente/{id}', [clienteControler::class, 'update'])->name('Actualizar');

Route::delete('/cliente/{id}', [clienteControler::class, 'destroy'])->name('rutaEliminar');






/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*  Route::view('/', 'inicio')->name('rutainicio'); */

/* Route::view('/form', 'formulario')->name('rutacacas'); */

/*  Route::view('/consultar', 'clientes')->name('rutaconsulta'); */



/*
->name('')
Este comando sirve para darle un apodo al nombre
*/


