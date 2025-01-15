@extends('layouts.master')

@section('title', 'Lista de Enfermedades')

@section('content')
    <h2>Enfermedades</h2>

    <a href="{{ route('enfermedades.create') }}" class="btn btn-success mb-3">Agregar Enfermedad</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($enfermedades as $enfermedad)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $enfermedad->nombre }}</td>
                    <td>{{ $enfermedad->descripcion }}</td>
                    <td>
                        <a href="{{ route('enfermedades.edit', $enfermedad->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('enfermedades.destroy', $enfermedad->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay enfermedades registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
