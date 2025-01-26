@extends('layouts.master')

@section('title', 'Nueva Cita Médica')

@section('content')
<div class="container">
    <h2>Nueva Cita Médica</h2>

    {{-- Mostrar errores de validación si existen --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario para crear cita --}}
    <form action="{{ route('citas_medicas.store') }}" method="POST">
        @csrf

        {{-- Campo Fecha --}}
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        {{-- Campo Hora --}}
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" class="form-control" value="{{ old('hora') }}" required>
        </div>

        {{-- Campo Motivo --}}
        <div class="form-group">
            <label for="motivo">Motivo:</label>
            <input type="text" name="motivo" id="motivo" class="form-control" value="{{ old('motivo') }}" required>
        </div>

        {{-- Campo Paciente --}}
        <div class="form-group">
            <label for="paciente_id">Paciente:</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ old('paciente_id') == $patient->id ? 'selected' : '' }}>
                        {{ $patient->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Campo Doctor --}}
        <div class="form-group">
            <label for="doctor_id">Doctor:</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">Seleccione un doctor</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                        {{ $doctor->nombres }} - {{ $doctor->especialidad }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Campo Enfermedad --}}
        <div class="form-group">
            <label for="enfermedad_id">Enfermedad:</label>
            <select name="enfermedad_id" id="enfermedad_id" class="form-control" required>
                <option value="">Seleccione una enfermedad</option>
                @foreach($enfermedades as $enfermedad)
                    <option value="{{ $enfermedad->id }}" {{ old('enfermedad_id') == $enfermedad->id ? 'selected' : '' }}>
                        {{ $enfermedad->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear Cita</button>
    </form>
</div>
@endsection
