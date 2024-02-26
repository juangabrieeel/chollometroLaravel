@extends('layouts.app')

@section('content')
    <div class="container form-container">
        <h1>Editar Chollo</h1>
        <form action="{{ route('chollos.update', $chollo->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $chollo->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ $chollo->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="url" name="url" id="url" class="form-control" value="{{ $chollo->url }}"
                    required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $chollo->categoria }}"
                    required>
            </div>
            <div class="form-group">
                <label for="puntuacion">Puntuación</label>
                <input type="number" name="puntuacion" id="puntuacion" class="form-control"
                    value="{{ $chollo->puntuacion }}" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" value="{{ $chollo->precio }}"
                    required>
            </div>
            <div class="form-group">
                <label for="precio_descuento">Precio con Descuento</label>
                <input type="number" name="precio_descuento" id="precio_descuento" class="form-control"
                    value="{{ $chollo->precio_descuento }}" required>
            </div>
            <div class="form-group">
                <label for="disponible">Disponible</label>
                <select name="disponible" id="disponible" class="form-control" required>
                    <option value="1" {{ $chollo->disponible ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$chollo->disponible ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar Chollo</button>
        </form>
    </div>
@endsection
