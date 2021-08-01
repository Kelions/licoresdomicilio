<?php

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

Route::view("/","home")->name("home");
Route::view("/conectar","conectar")->name("conectar");
Route::view("/productos","productos")->name("productos");
Route::view("/promociones","promociones")->name("promociones");
Route::view("/carrito","carrito")->name("carrito");




