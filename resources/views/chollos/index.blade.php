@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Chollos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chollos as $chollo)
                    <tr>
                        <td>{{ $chollo->id }}</td>
                        <td>{{ $chollo->titulo }}</td>
                        <td>{{ $chollo->categoria }}</td>
                        <td>
                            <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
