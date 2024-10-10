<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutacacas');

Route::view('/consultar', 'clientes')->name('rutaconsulta');

Route::view('/component', 'componentes') ->name('rutacomponent');

/*
->name('')
Este comando sirve para darle un apodo al nombre
*/


