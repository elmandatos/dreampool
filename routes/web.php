<?php

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

Route::view("/","inicio")->name("inicio");
Route::post("/","SendMail@mailContactanos")->name("correo");
Route::view("/2","layout")->name("inicio2");
// Route::view("/","contactanos")->name("contactanos");
// Route::view("/","servicios")->name("servicios");
// Route::view("/","galeria")->name("galeria");