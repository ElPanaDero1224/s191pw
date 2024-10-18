<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controlador;



Route::get('/', [controlador::class, 'inicio']);