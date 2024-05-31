@extends('layout')
@section('title','Servicios')
@section('content')
    <h1>Servicios</h1>
    <p>Esta es la página de Servicios</p>
    <ul>
        @if ($servicios)
            @foreach ($servicios as $item)
                <li>{{$item['titulo']}}</li>
            @endforeach
        @else
            <li>No hay servicios disponibles</li>
        @endif
    </ul>
@endsection