@extends('layouts.master')

@section('title', 'Citas Medicas - Hospital Management')

@section('content')
    <h2>Citas Médicas</h2>

    <a href="{{ route('citas_medicas.create') }}" class="btn btn-success mb-3">Crear Cita Médica</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo de la Cita</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($appointments->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">No hay citas médicas disponibles.</td>
                </tr>
            @else
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $appointment->fecha }}</td>
                        <td>{{ $appointment->hora }}</td>
                        <td>{{ $appointment->motivo }}</td>
                        <td>
                            <a href="{{ route('citas_medicas.show', $appointment->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('citas_medicas.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('citas_medicas.destroy', $appointment->id) }}" method="POST" class="inline-form" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta cita médica?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
