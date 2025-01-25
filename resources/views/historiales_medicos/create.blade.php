@extends('layouts.master')

@section('title', 'Agregar Historial Médico')

@section('content')
<div class="container">
    <h2>Agregar Nuevo Historial Médico</h2>

    {{-- Formulario para crear un historial médico --}}
    <form action="{{ route('historiales_medicos.store') }}" method="POST">
        @csrf

        {{-- Campo Paciente --}}
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- Campo Doctor --}}
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">Seleccione un doctor</option>
                @foreach($doctores as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nombres }}</option>
                @endforeach
            </select>
        </div>

        {{-- Campo Fecha --}}
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        {{-- Campo Diagnóstico --}}
        <div class="form-group">
            <label for="diagnostico">Diagnóstico</label>
            <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" required></textarea>
        </div>

        {{-- Campo Tratamiento --}}
        <div class="form-group">
            <label for="tratamiento">Tratamiento</label>
            <textarea name="tratamiento" id="tratamiento" class="form-control" rows="4"></textarea>
        </div>

        {{-- Campo Medicamentos --}}
        <div class="form-group">
            <label for="medicamentos">Medicamentos</label>
            <textarea name="medicamentos" id="medicamentos" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Historial</button>
    </form>
</div>
@endsection
