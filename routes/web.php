<?php

use App\Http\Controllers\EnfermedadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\CitaMedicaController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistorialMedicoController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Ruta principal (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas de recursos (CRUD) para pacientes, doctores, etc.
Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('enfermedades', EnfermedadController::class)->parameters(['enfermedades' => 'enfermedad']);
Route::resource('medicamentos', MedicamentoController::class);
Route::resource('citas_medicas', CitaMedicaController::class);
Route::resource('historiales_medicos', HistorialMedicoController::class);

// Rutas personalizadas
Route::get('calendarios/paciente/{pacienteId}', [CalendarioController::class, 'index'])->name('calendarios.paciente');

// Rutas protegidas para superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::resource('users', UserController::class);
});

// Rutas para estadísticas
Route::get('estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas.index');

// Rutas de autenticación
Auth::routes();

// Ruta para redirigir al home después del login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas específicas para el doctor y las citas
Route::get('doctor/{doctor}/citas', [DoctorController::class, 'citas'])->name('doctor.citas');
