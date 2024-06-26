<?php

use Illuminate\Support\Facades\Route;

$talleres=[];


Route::view('/','inicio')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');

Route::get('personas','App\Http\Controllers\PersonaController@index')->name('personas.index');

Route::get('personas/create','App\Http\Controllers\PersonaController@create')->name('personas.create');

Route::get('personas/{nPerCodigo}/editar','App\Http\Controllers\PersonaController@edit')->name('personas.edit');

Route::patch('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@update')->name('personas.update');

Route::post('personas','App\Http\Controllers\PersonaController@store')->name('personas.store');

Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@show')->name('persona.show');

Route::delete('personas/{nPerCodigo}','App\Http\Controllers\PersonaController@destroy')->name('personas.destroy');

Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');


