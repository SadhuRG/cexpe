@extends('layouts.layout')

@section('title', 'Personas')

@section('content')

<h2 style="text-align: center; margin: 40px 0;">
    <a style="color: red; padding: 2px 20px; border: 3px solid red; border-radius: 15px; text-decoration: none;" href="{{ route('personas.create') }}">Nueva Persona</a>
</h2>

<div class="container">
    <div class="row justify-content-center">
        @if($personas)
            @foreach($personas as $persona)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card mb-4" style="width: 18rem; border: 2px solid black;">
                        @if($persona->image)
                            <img src="/storage/{{ $persona->image }}" class="card-img-top" alt="{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}">
                        @else
                            <img src="path_to_default_image.jpg" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('personas.show', $persona) }}" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p class="text-center">No existe ninguna persona que mostrar</p>
            </div>
        @endif
    </div>
</div>

@endsection
