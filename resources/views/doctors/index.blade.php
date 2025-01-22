@extends('layouts.master')

@section('title', 'Doctores - Hospital Management')

@section('content')
    <h2>Doctores</h2>

    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Crear nuevo Doctor</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Especialidad</th>
                <th>Contacto</th>
                <th>Correo</th>
                <th>Sexo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($doctors as $doctor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $doctor->nombres }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>{{ $doctor->contacto }}</td>
                    <td>{{ $doctor->correo }}</td>
                    <td>{{ $doctor->sexo }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este Doctor?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay doctores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
