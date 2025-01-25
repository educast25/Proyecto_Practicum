@extends('layouts.master')

@section('title', 'Crear Medicamento')

@section('content')
<div class="container">
    <h2>Agregar Nuevo Medicamento</h2>

    <form action="{{ route('medicamentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="laboratorio">Laboratorio</label>
            <input type="text" name="laboratorio" id="laboratorio" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible</label>
            <input type="number" name="cantidad_disponible" id="cantidad_disponible" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar Medicamento</button>
    </form>
    
</div>
@endsection
