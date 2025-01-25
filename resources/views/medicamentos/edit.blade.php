@extends('layouts.master')

@section('title', 'Editar Medicamento')

@section('content')
<div class="container">
    <h2>Editar Medicamento</h2>

    {{-- Formulario para editar un medicamento --}}
    <form action="{{ route('medicamentos.update', $medicamento->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Campo Nombre --}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $medicamento->nombre) }}" required>
        </div>

        {{-- Campo Descripción --}}
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="4">{{ old('descripcion', $medicamento->descripcion) }}</textarea>
        </div>

        {{-- Campo Laboratorio --}}
        <div class="form-group">
            <label for="laboratorio">Laboratorio</label>
            <input type="text" name="laboratorio" id="laboratorio" class="form-control" value="{{ old('laboratorio', $medicamento->laboratorio) }}">
        </div>

        {{-- Campo Cantidad Disponible --}}
        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible</label>
            <input type="number" name="cantidad_disponible" id="cantidad_disponible" class="form-control" value="{{ old('cantidad_disponible', $medicamento->cantidad_disponible) }}" required>
        </div>

        {{-- Campo Precio --}}
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio', $medicamento->precio) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar Medicamento</button>
    </form>
</div>
@endsection
