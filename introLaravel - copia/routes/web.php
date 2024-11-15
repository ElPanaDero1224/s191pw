<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteControler;

#Rutas para trabajar con controladorVistas

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');



Route::get('/consultar',[controladorVistas::class,'select'])->name('rutaconsulta');

Route::view('/component', 'componentes')->name('rutacomponent');

Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente' ])->name('rutaenvia');



#rutas para trabajar con el controlador cliente



Route::get('/cliente/create',[clienteControler::class,'create'])->name('rutacacas');



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


