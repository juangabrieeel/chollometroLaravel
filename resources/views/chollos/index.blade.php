@extends('layouts.app')

@section('content')
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
                    <tr>
                        <td>
                            <img src="{{ asset('storage/img/' . $chollo->imagen) }}" alt="{{ $chollo->titulo }}"
                                style="max-width: 100px; max-height: 100px;">

                        </td>
                        <td>{{ $chollo->id }}</td>
                        <td>{{ $chollo->titulo }}</td>
                        <td>{{ $chollo->categoria }}</td>
                        <td>
                            <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-primary">Editar</a>

                        </td>
                        <td>
                            <!-- Botón de Eliminar -->
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
@endsection
