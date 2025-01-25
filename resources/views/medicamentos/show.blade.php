@extends('layouts.master')

@section('title', 'Detalles del Medicamento')

@section('content')
<div class="container">
    <h2>Detalles del Medicamento</h2>
    
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Información del Medicamento
        </div>
        <div class="card-body">
            {{-- Nombre --}}
            <p><strong>Nombre:</strong> {{ $medicamento->nombre }}</p>

            {{-- Descripción --}}
            <p><strong>Descripción:</strong> {{ $medicamento->descripcion ?? 'No especificada' }}</p>

            {{-- Laboratorio --}}
            <p><strong>Laboratorio:</strong> {{ $medicamento->laboratorio ?? 'No especificado' }}</p>

            {{-- Cantidad Disponible --}}
            <p><strong>Cantidad Disponible:</strong> {{ $medicamento->cantidad_disponible }}</p>

            {{-- Precio --}}
            <p><strong>Precio:</strong> ${{ number_format($medicamento->precio, 2) }}</p>
        </div>
    </div>

    {{-- Botones de acción --}}
    <div class="mt-4">
        <a href="{{ route('medicamentos.index') }}" class="btn btn-secondary">Volver a la Lista</a>
        <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar este medicamento?')">Eliminar</button>
        </form>
    </div>
</div>
@endsection
