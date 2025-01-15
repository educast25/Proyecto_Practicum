@extends('layouts.master')

@section('title', 'Pacientes - Hospital Management')

@section('content')
    <h2>Pacientes</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Fecha Nacimiento</th>
                <th>Edad</th>
                <th>Contacto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($patients->isEmpty())
                <tr>
                    <td colspan="8" class="text-center">No hay pacientes disponibles.</td>
                </tr>
            @else
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $patient->nombre }}</td>
                        <td>{{ $patient->ciudad }}</td>
                        <td>{{ $patient->dirección }}</td>
                        <td>{{ $patient->fecha_nacimientoe }}</td>
                        <td>{{ $patient->edad }}</td>
                        <td>{{ $patient->contacto }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Actions">
                                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este paciente?')">Delete</button>
                                </form>
                            </div>
                        </td>                        
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
