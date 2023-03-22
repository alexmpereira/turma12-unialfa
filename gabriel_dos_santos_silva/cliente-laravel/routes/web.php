<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
// Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
// Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');


// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
// Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');



// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');


// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::resource('/clients', ClientController::class);
Route::resource('/products', ProductController::class);