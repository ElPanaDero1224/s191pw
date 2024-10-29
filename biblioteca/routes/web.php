<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'Principal')->name('menu');
Route::view('/registro', 'Registro')->name('registro');

