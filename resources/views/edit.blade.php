@extends('layouts.layout')

@section('title', 'Editar Persona')

@section('content')


@auth
<h2 style="text-align: center;">Editar Nueva Persona</h2>

@include('partials.validation-errors')

<form action="{{ route('personas.update', $persona) }}" method="post" style="display: flex; justify-content: center;">
@method('PATCH')
@include('partials.form',['btnText' => 'Actualizar'])
</form>
@endauth

@endsection