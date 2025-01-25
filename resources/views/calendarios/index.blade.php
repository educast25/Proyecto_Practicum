@extends('layouts.master')

@section('title', 'Calendario de Citas Médicas')

@section('content')
<div class="container">
    <h2>Mis Citas Médicas</h2>

    @if($citas->isEmpty())
        <p class="text-center">No tienes citas programadas.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citas as $cita)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora }}</td>
                        <td>{{ $cita->motivo }}</td>
                        <td>{{ $cita->doctor->nombres ?? 'Sin asignar' }}</td>
                        <td>{{ $cita->doctor->especialidad ?? 'Sin asignar' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
