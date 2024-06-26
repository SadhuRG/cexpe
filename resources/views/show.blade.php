@extends('layouts.layout')
@section('title','personas | ' . $persona->nPerCodigo)

@section('content')

<a href="{{ route('personas.edit', $persona) }}" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px; margin-right: 20px;">Editar</a>

<form action="{{ route('personas.destroy', $persona) }}" method="POST" style="display: inline-block;">
    @csrf @method('DELETE')
    <button type="submit" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px;">Eliminar</button>
</form>


<div class="row">
    <div class="col-md-12">
        <h2>Detalles de la persona</h2>
        <p><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
        <p><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
        <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $persona->cPerFecNac }}</p>
        <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
        <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
        <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
        <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
        <p><strong>Estado:</strong> {{ $persona->cPerEstado }}</p>
    </div>
</div>

@endsection