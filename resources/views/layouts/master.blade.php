<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hospital Isidro Ayora')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .navbar {
            background: linear-gradient(90deg, #007bff, #6610f2);
        }

        .navbar-brand {
            font-weight: 700;
            color: #fff !important;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar-nav .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .taskbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #6610f2;
            color: #fff;
            padding: 10px 0;
        }

        .taskbar a {
            color: #fff;
            text-decoration: none;
            text-align: center;
            flex: 1;
            transition: all 0.3s ease;
            padding: 10px;
            font-size: 14px;
        }

        .taskbar a:hover {
            background-color: #ffc107;
            color: #343a40;
            border-radius: 8px;
        }

        .taskbar i {
            display: block;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .container {
            flex: 1; /* Asegura que el contenido crezca para empujar el footer */
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }

        footer a {
            color: #00bcd4;
            text-decoration: none;
        }

        footer a:hover {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hospital Isidro Ayora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </li>
                    @auth
                        @if(auth()->user()->role === 'superadmin')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('patients.index') ? 'active' : '' }}" href="{{ route('patients.index') }}">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('doctors.index') ? 'active' : '' }}" href="{{ route('doctors.index') }}">Doctores</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Barra de tareas -->
    @auth
    <div class="taskbar">
        <a href="{{ route('citas_medicas.index') }}">
            <i class="fa-solid fa-calendar-check"></i>
            Citas
        </a>
        <a href="{{ route('enfermedades.index') }}">
            <i class="fa-solid fa-virus"></i>
            Enfermedades
        </a>
        <a href="{{ route('historiales_medicos.index') }}">
            <i class="fa-solid fa-notes-medical"></i>
            Historial
        </a>
        <a href="{{ route('estadisticas.index') }}">
            <i class="fa-solid fa-chart-bar"></i>
            Estadísticas
        </a>
        <a href="{{ route('medicamentos.index') }}">
            <i class="fa-solid fa-pills"></i>
            Medicamentos
        </a>
        <a href="{{ route('calendarios.paciente', auth()->user()->id) }}">
            <i class="fa-solid fa-calendar-days"></i>
            Mi Calendario
        </a>
    </div>
    @endauth

    <!-- Contenido -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div>&copy; {{ date('Y') }} Hospital Isidro Ayora. Todos los derechos reservados.</div>
        <div>
            <a href="#">Sistema desarrollado por Eduardo Castillo</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
