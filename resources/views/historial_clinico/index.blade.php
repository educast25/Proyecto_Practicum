@extends('layouts.master')

@section('title', 'Historial Clínico - Hospital Management')

@section('content')
    <h2>Historial Clínico</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>ID Consulta Médica</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo de la Cita</th>
                <th>Paciente ID</th>
                <th>Consulta Historial Médico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($appointments->isEmpty())
                <tr>
                    <td colspan="8" class="text-center">No hay citas médicas registradas.</td>
                </tr>
            @else
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->fecha }}</td>
                        <td>{{ $appointment->hora }}</td>
                        <td>{{ $appointment->motivo_cita }}</td>
                        <td>{{ $appointment->paciente_id }}</td>
                        <td><a href="{{ route('appointments.history', $appointment->id) }}" class="btn btn-sm btn-info">Ver Historial</a></td>
                        <td>
                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="inline-form" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta cita médica?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection