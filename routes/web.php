<?php

use Illuminate\Support\Facades\Route;

$talleres=[];


Route::view('/','inicio')->name('inicio');

Route::view('programas','programas')->name('programas');

Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');

Route::resource('personas','App\Http\Controllers\PersonaController')->names('personas');

Route::view('asesoramiento','asesoramiento')->name('asesoramiento');

Route::view('contacto','contacto')->name('contacto');

Route::post('contacto','App\Http\Controllers\ContactoController@store');



Auth::routes(['register'=>false]);


