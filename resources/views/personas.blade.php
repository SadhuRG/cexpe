@extends('layouts.layout')

@section('title','Personas')

@section('content')

<h2 style="text-align: center; margin: 40px 0;">
        <a style="color: red; padding: 2px 20px; border: 3px solid red; border-radius: 15px; text-decoration: none;" href="{{ route('personas.create') }}">Nueva Persona</a>
</h2>

<ul>
    @if($personas)
        @foreach($personas as $persona)
        <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
        <li><a href="{{ route('persona.show', $persona->nPerCodigo) }}" class="btn btn-primary">Ver detalles</a></li>
        @endforeach
    @else
         <li>No existe ninguna persona que mostrar</li>
    @endif
</ul>

@endsection