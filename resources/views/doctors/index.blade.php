@extends('layouts.master')

@section('title', 'Doctores - Hospital Management')

@section('content')
    <h2>Doctores</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Contacto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $doctor->nombre }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>{{ $doctor->contacto }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este Doctor?')">Delete</button>
                            </form>
                        </div>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
