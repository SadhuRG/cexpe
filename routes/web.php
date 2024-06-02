<?php

use Illuminate\Support\Facades\Route;

$talleres=[];


Route::view('/','inicio')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');

