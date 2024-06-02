@extends('layouts.layout')

@section('title','talleres')

@section('content')

<h1 class="text-center text-3xl">Talleres</h1>

<ul>
    @if($talleres)
        @foreach($talleres as $item)
            <li>{{$item}}</li>
        @endforeach
    @else
         <li>No existe ningun servicio que mostrar</li>
    @endif
</ul>

@endsection