@extends('layouts.master')

@section('title', 'Detalles del Historial Médico')

@section('content')
<div class="container">
    <h2>Detalles del Historial Médico</h2>

    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Información del Historial Médico
        </div>
        <div class="card-body">
            {{-- Paciente --}}
            <p><strong>Paciente:</strong> {{ $historialMedico->paciente->nombre }}</p>

            {{-- Doctor --}}
            <p><strong>Doctor:</strong> {{ $historialMedico->doctor->nombres }}</p>

            {{-- Fecha --}}
            <p><strong>Fecha:</strong> {{ $historialMedico->fecha }}</p>

            {{-- Diagnóstico --}}
            <p><strong>Diagnóstico:</strong> {{ $historialMedico->diagnostico }}</p>

            {{-- Tratamiento --}}
            <p><strong>Tratamiento:</strong> {{ $historialMedico->tratamiento ?? 'No especificado' }}</p>

            {{-- Medicamentos --}}
            <p><strong>Medicamentos:</strong> {{ $historialMedico->medicamentos ?? 'No especificados' }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('historiales_medicos.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('historiales_medicos.edit', $historialMedico->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('historiales_medicos.destroy', $historialMedico->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar este historial?')">Eliminar</button>
        </form>
    </div>
</div>
@endsection
