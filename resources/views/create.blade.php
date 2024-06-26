@extends('layouts.layout')

@section('title', 'Crear Persona')

@section('content')

<h2 style="text-align: center;">Crear nueva persona</h2>

@include('partials.validation-errors')

<form action="{{ route('personas.store') }}" method="post" style="margin-left: 10px;">
    @include('partials.form',['btnText' => 'Guardar'])
</form>

@endsection