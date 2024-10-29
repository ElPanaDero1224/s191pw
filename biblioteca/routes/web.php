<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistas;



Route::get('/', [vistas::class, 'menu'])->name('menu');
Route::get('/registro', [vistas::class, 'registro'])->name('registro');

