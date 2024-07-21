@extends('layouts.layout')

@section('title', 'Crear Persona')

@section('content')

@auth
<h2 style="text-align: center;">Crear nueva persona</h2>
@endauth

@include('partials.validation-errors')

<form action="{{ route('personas.store') }}" method="post" style="display: flex; justify-content: center;">
    @include('partials.form',['btnText' => 'Guardar'])
</form>

@endsection