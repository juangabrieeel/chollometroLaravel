@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Chollo</h1>
        <div>
            <h2>{{ $chollo->titulo }}</h2>
            <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="{{ $chollo->titulo }}"
                style="max-width: 200px; max-height: 200px;">
            <p><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
            <p><strong>Descripción:</strong> {{ $chollo->descripcion }}</p>
            <p><strong>URL:</strong> <a href="{{ $chollo->url }}" target="_blank">{{ $chollo->url }}</a></p>
            <p><strong>Puntuación:</strong> {{ $chollo->puntuacion }}</p>
            <p><strong>Precio:</strong> {{ $chollo->precio }} €</p>
            <p><strong>Precio con Descuento:</strong> {{ $chollo->precio_descuento }} €</p>
            <a href="{{ route('chollos.index') }}" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
@endsection
