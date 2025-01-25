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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('enfermedades', EnfermedadController::class)->parameters(['enfermedades' => 'enfermedad']);
Route::resource('medicamentos', MedicamentoController::class);
Route::resource('citas_medicas', CitaMedicaController::class);
Route::resource('historiales_medicos', HistorialMedicoController::class);
Route::get('calendarios/paciente/{pacienteId}', [CalendarioController::class, 'index'])->name('calendarios.paciente');
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::resource('users', UserController::class);
});
Route::get('estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
