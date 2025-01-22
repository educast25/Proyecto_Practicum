@extends('layouts.master')

@section('title', 'Crear Doctor - Hospital Management')

@section('content')
    <h2>Crear Doctor</h2>

    <!-- Formulario para crear doctor -->
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombres">Nombres del Doctor:</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>

        <div class="form-group">
            <label for="especialidad">Especialidad:</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" required>
        </div>

        <div class="form-group">
            <label for="contacto">Contacto:</label>
            <input type="text" class="form-control" id="contacto" name="contacto" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>        

        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select class="form-control" id="sexo" name="sexo" required>
                <option value="">Seleccione una opción</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Doctor</button>
    </form>
@endsection