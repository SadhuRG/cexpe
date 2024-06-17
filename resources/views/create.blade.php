@extends('layouts.layout')

@section('title', 'Crear Persona')

@section('content')

<h2 style="text-align: center;">Crear nueva persona</h2>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form action="{{ route('personas.store') }}" method="post" style="margin-left: 10px;">
    @csrf

    <ul style="list-style-position: inside; padding: 0; display: inline-block; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerApellido" style="margin-right: 10px;">Nombre</label>
            <input type="text" name="cPerApellido" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerNombre" style="margin-right: 10px;">Apellido</label>
            <input type="text" name="cPerNombre" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerDireccion" style="margin-right: 10px;">Dirección</label>
            <input type="text" name="cPerDireccion" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerFecNac" style="margin-right: 10px;">Fecha de Nacimiento</label>
            <input type="date" name="cPerFecNac" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="nPerEdad" style="margin-right: 10px;">Edad</label>
            <input type="number" name="nPerEdad" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerSexo" style="margin-right: 10px;">Sexo</label>
            <select name="cPerSexo" style="flex-grow: 1; margin-right: 10px;">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="nPerSueldo" style="margin-right: 10px;">Sueldo</label>
            <input type="number" name="nPerSueldo" style="flex-grow: 1; margin-right: 10px;" step="0.01">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="cPerRnd" style="margin-right: 10px;">RND</label>
            <input type="text" name="cPerRnd" style="flex-grow: 1; margin-right: 10px;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="nPerEstado" style="margin-right: 10px;">Estado</label>
            <input type="text" name="nPerEstado" style="flex-grow: 1; margin-right: 10px;">
        </li>


        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">Guardar</button>
        </li>
    </ul>
</form>

@endsection