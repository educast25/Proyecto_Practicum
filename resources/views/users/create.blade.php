@extends('layouts.master')

@section('title', 'Crear Usuario')

@section('content')
<div class="container">
    <h2>Crear Nuevo Usuario</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Rol</label>
            <select name="role" id="role" class="form-control" required>
                <option value="">Seleccione un Rol</option>
                <option value="paciente">Paciente</option>
                <option value="doctor">Doctor</option>
            </select>
        </div>

        {{-- Campo Especialidad dinámico (solo para doctores) --}}
        <div class="form-group" id="especialidad-field" style="display: none;">
            <label for="especialidad">Especialidad (Solo para Doctores)</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear Usuario</button>
    </form>
</div>

{{-- Script para mostrar/ocultar el campo de especialidad según el rol seleccionado --}}
<script>
    document.getElementById('role').addEventListener('change', function () {
        const especialidadField = document.getElementById('especialidad-field');
        if (this.value === 'doctor') {
            especialidadField.style.display = 'block';
        } else {
            especialidadField.style.display = 'none';
        }
    });
</script>
@endsection
