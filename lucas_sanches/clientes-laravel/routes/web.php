<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', [ClienteController::class,'index'])->name('client.index');
Route::get('/cliente/{id}', [ClienteController::class,'show'])->name('client.show');


