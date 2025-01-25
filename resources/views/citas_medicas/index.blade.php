@extends('layouts.master')

@section('title', 'Citas Médicas')

@section('content')
    <h2>Lista de Citas Médicas</h2>

    <a href="{{ route('citas_medicas.create') }}" class="btn btn-primary mb-3">Nueva Cita Médica</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Paciente</th>
                <th>Doctor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($citas as $cita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cita->fecha }}</td>
                    <td>{{ $cita->hora }}</td>
                    <td>{{ $cita->motivo }}</td>
                    <td>{{ $cita->paciente->nombre ?? 'Sin paciente' }}</td>
                    <td>{{ $cita->doctor->nombres ?? 'Sin doctor' }}</td>
                    <td>
                        <a href="{{ route('citas_medicas.show', $cita->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('citas_medicas.edit', $cita->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('citas_medicas.destroy', $cita->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar esta cita médica?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay citas médicas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
