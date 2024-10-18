<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controlador;



Route::get('/', [controlador::class, 'inicio']);

Route::get('/repaso', [controlador::class, 'repaso1'])->name('rutacacasrevenge');