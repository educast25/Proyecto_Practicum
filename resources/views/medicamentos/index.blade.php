@extends('layouts.master')

@section('title', 'Medicamentos - Hospital Management')

@section('content')
    <h2>Medicamentos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de la Medicina</th>
                <th>Marca</th>
                <th>Fecha de Caducidad</th>
                <th>Recetado a Paciente</th>
                <th>Recetado por Doctor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($medicamentos->isEmpty())
                <tr>
                    <td colspan="7" class="text-center">No hay medicamentos registrados.</td>
                </tr>
            @else
                @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $medicamento->nombre }}</td>
                        <td>{{ $medicamento->marca }}</td>
                        <td>{{ $medicamento->fecha_caducidad->format('d-m-Y') }}</td>
                        <td>{{ $medicamento->paciente->nombre ?? 'No asignado' }}</td>
                        <td>{{ $medicamento->doctor->nombre ?? 'No asignado' }}</td>
                        <td>
                            <a href="{{ route('medicamentos.show', $medicamento->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este medicamento?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection