@extends('layouts.master')

@section('title', 'Home - Hospital Isidro Ayora')

@section('content')
<div class="jumbotron text-center bg-light p-5 rounded">
    <h1 class="display-4">Bienvenido al sitio web del Hospital Isidro Ayora</h1>
    <p class="lead">Gestión integral de Pacientes, Doctores y Citas Médicas</p>
    <hr class="my-4">
    

    {{-- Verifica si el usuario está autenticado --}}
    @auth
        <p class="text-success">¡Has iniciado sesión como <strong>{{ auth()->user()->role }}</strong>!</p>
        
        {{-- Enlaces dinámicos según el rol del usuario --}}
        @if(auth()->user()->role === 'paciente')
            <a href="{{ route('calendarios.paciente', auth()->user()->id) }}" class="btn btn-primary">Ver Mi Calendario</a>
        @elseif(auth()->user()->role === 'doctor')
            <!-- Mostrar botón de citas sin necesidad de relación 'doctor' -->
            <a href="{{ route('doctor.citas', ['doctor' => auth()->user()->id]) }}" class="btn btn-primary">Ver Citas Asignadas</a>
        @elseif(auth()->user()->role === 'superadmin')
            <a href="{{ route('patients.index') }}" class="btn btn-primary">Gestionar Pacientes</a>
            <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Gestionar Doctores</a>
            <a href="{{ route('citas_medicas.index') }}" class="btn btn-info">Gestionar Citas Médicas</a>
        @endif

        {{-- Botón para cerrar sesión --}}
        <form action="{{ route('logout') }}" method="POST" class="d-inline-block mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
    @else
        <p class="text-warning">Inicia sesión para acceder a las funcionalidades del sistema.</p>

        {{-- Botones para iniciar sesión y registrarse --}}
        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
    @endauth
    <p class="text-muted">Sistema desarrollado por <strong>Eduardo Castillo</strong></p>    
</div>
@endsection
