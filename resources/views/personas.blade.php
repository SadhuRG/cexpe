@extends('layouts.layout')

@section('title','Personas')

@section('content')

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