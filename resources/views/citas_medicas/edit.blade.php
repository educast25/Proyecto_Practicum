@extends('layouts.master')

@section('title', 'Editar Cita Médica')

@section('content')
<div class="container">
    <h2>Editar Cita Médica</h2>

    {{-- Formulario para editar la cita --}}
    <form action="{{ route('citas_medicas.update', $citaMedica->id) }}" method="POST">
        @csrf
        @method('PUT')
            
        {{-- Campo fecha --}}
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date"
                   name="fecha"
                   id="fecha"
                   class="form-control"
                   value="{{ old('fecha', $citaMedica->fecha) }}"
                   required>
        </div>

        {{-- Campo hora --}}
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time"
                   name="hora"
                   id="hora"
                   class="form-control"
                   value="{{ old('hora', $citaMedica->hora) }}"
                   required>
        </div>

        {{-- Campo motivo --}}
        <div class="form-group">
            <label for="motivo">Motivo de la Cita:</label>
            <textarea name="motivo"
                      id="motivo"
                      class="form-control"
                      rows="3"
                      required>{{ old('motivo', $citaMedica->motivo) }}</textarea>
        </div>

        {{-- Campo paciente_id --}}
        <div class="form-group">
            <label for="paciente_id">Paciente ID:</label>
            <input type="number"
                   name="paciente_id"
                   id="paciente_id"
                   class="form-control"
                   value="{{ old('paciente_id', $citaMedica->paciente_id) }}"
                   required>
        </div>

        {{-- Campo doctor_id --}}
        <div class="form-group">
            <label for="doctor_id">Doctor ID:</label>
            <input type="number"
                   name="doctor_id"
                   id="doctor_id"
                   class="form-control"
                   value="{{ old('doctor_id', $citaMedica->doctor_id) }}"
                   required>
        </div>

        {{-- Campo enfermedad_id --}}
        <div class="form-group">
            <label for="enfermedad_id">Enfermedad ID (opcional):</label>
            <input type="number"
                   name="enfermedad_id"
                   id="enfermedad_id"
                   class="form-control"
                   value="{{ old('enfermedad_id', $citaMedica->enfermedad_id) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection