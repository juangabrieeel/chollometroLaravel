@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="container">
            <h1>Listado de Chollos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>IMAGEN</th>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chollos as $chollo)
                        <tr class="chollo-row">
                            <td class="chollo-image with-border">
                                <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}"
                                    alt="Chollo {{ $chollo->id }}" style="max-width: 200px; max-height: 200px;">
                            </td>
                            <td class="with-border">{{ $chollo->id }}</td>
                            <td class="with-border">{{ $chollo->titulo }}</td>
                            <td class="with-border">{{ $chollo->categoria }}</td>
                            <td class="chollo-actions with-border">
                                <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('chollos.destroy', $chollo->id) }}" method="post"
                                    style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este chollo?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <div>
                <a href="{{ url('chollos/create') }}" class="btn btn-primary">Añadir chollo</a>
            </div>
        </div>
    @endsection
