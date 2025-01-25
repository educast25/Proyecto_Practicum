@extends('layouts.master')

@section('title', 'Historial Médico')

@section('content')
<div class="container">
    <h2>Historial Médico</h2>
    <a href="{{ route('historiales_medicos.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Historial</a>

    @if($historiales->isEmpty())
        <p>No hay registros en el historial médico.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Doctor</th>
                    <th>Fecha</th>
                    <th>Diagnóstico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historiales as $historial)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $historial->paciente->nombre }}</td>
                        <td>{{ $historial->doctor->nombres }}</td>
                        <td>{{ $historial->fecha }}</td>
                        <td>{{ $historial->diagnostico }}</td>
                        <td>
                            <a href="{{ route('historiales_medicos.show', $historial->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('historiales_medicos.edit', $historial->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('historiales_medicos.destroy', $historial->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
