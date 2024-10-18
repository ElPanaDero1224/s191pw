<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controlador;



Route::get('/', [controlador::class, 'inicio']);

Route::get('/repaso', [controlador::class, 'repaso1'])->name('rutacacasrevenge');

Route::post('/MBaGB', [controlador::class, 'deMBaGB'])->name('deMBaGB');

Route::post('/GBaMB', [controlador::class, 'deGBaMB'])->name('deGBaMB');

Route::post('/TBaGB', [controlador::class, 'deTBaGB'])->name('deTBaGB');

Route::post('/GBaTB', [controlador::class, 'deGBaTB'])->name('deGBaTB');