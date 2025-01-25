@extends('layouts.master')

@section('title', 'Estadísticas - Hospital Management')

@section('content')
<div class="container">
    <h2>Estadísticas Generales</h2>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Pacientes</h5>
                    <p class="card-text">{{ $totalPacientes }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Doctores</h5>
                    <p class="card-text">{{ $totalDoctores }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Citas Médicas</h5>
                    <p class="card-text">{{ $totalCitas }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Medicamentos</h5>
                    <p class="card-text">{{ $totalMedicamentos }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3>Citas por Especialidad</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Especialidad</th>
                    <th>Cantidad de Citas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citasPorEspecialidad as $especialidad)
                    <tr>
                        <td>{{ $especialidad['especialidad'] }}</td>
                        <td>{{ $especialidad['citas'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
