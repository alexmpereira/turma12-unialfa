<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

//Route::get ('/clients', [ClientController::class, 'index'])-> name('clients.index');
//Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
//Route::get ('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
//Route::get('/clients/{id}/edit',[ClientController::class, 'edit'])->name('clients.edit');

//Route::post('/clients', [ClientController::class, 'store'])-> name('clients.store');
//Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
//Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::resource('/clients', ClientController::class);
