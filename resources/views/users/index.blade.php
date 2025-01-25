@extends('layouts.master')

@section('title', 'Gestión de Usuarios')

@section('content')
<div class="container">
    <h2>Gestión de Usuarios</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Crear Nuevo Usuario</a>

    @if($users->isEmpty())
        <p>No hay usuarios registrados.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Especialidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>{{ $user->especialidad ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
