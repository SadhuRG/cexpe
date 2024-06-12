<?php

use Illuminate\Support\Facades\Route;

$talleres=[];


Route::view('/','inicio')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');

Route::get('personas','App\Http\Controllers\PersonaController@index')->name('personas');
Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@show')->name('persona.show');

Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');
