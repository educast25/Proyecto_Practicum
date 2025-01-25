@extends('layouts.master')

@section('title', 'Editar Cita Médica')

@section('content')
<div class="container">
    <h2>Editar Cita Médica</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('citas_medicas.update', $citaMedica->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date"
                   name="fecha"
                   id="fecha"
                   class="form-control"
                   value="{{ old('fecha', $citaMedica->fecha) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time"
                   name="hora"
                   id="hora"
                   class="form-control"
                   value="{{ old('hora', $citaMedica->hora) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo:</label>
            <input type="text"
                   name="motivo"
                   id="motivo"
                   class="form-control"
                   value="{{ old('motivo', $citaMedica->motivo) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="paciente_id">Paciente ID:</label>
            <input type="number"
                   name="paciente_id"
                   id="paciente_id"
                   class="form-control"
                   value="{{ old('paciente_id', $citaMedica->paciente_id) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="doctor_id">Doctor ID:</label>
            <input type="number"
                   name="doctor_id"
                   id="doctor_id"
                   class="form-control"
                   value="{{ old('doctor_id', $citaMedica->doctor_id) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="enfermedad_id">Enfermedad ID (opcional):</label>
            <input type="number"
                   name="enfermedad_id"
                   id="enfermedad_id"
                   class="form-control"
                   value="{{ old('enfermedad_id', $citaMedica->enfermedad_id) }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection
