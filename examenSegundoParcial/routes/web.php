<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorExamen;



/*Route::view("/","utilesEscolares"); */

Route::get('/',[controladorExamen::class,'utilesVista'])->name('utilesVista');

route::post('/funcion', [controladorExamen::class,'subirFormulario'])->name('formulario');