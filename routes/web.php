<?php

use App\Http\Controllers\CitaMedicaController;
use App\Http\Controllers\EnfermedadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\HistorialClinicoController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\MedicamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('citas_medicas', CitaMedicaController::class);
Route::resource('enfermedades', EnfermedadController::class);
Route::resource('calendario', CalendarioController::class);
Route::resource('historial_clinico', HistorialClinicoController::class);
Route::resource('estadisticas', EstadisticasController::class);
Route::resource('medicamentos', MedicamentoController::class);
//Route::get('/calendario', [CalendarController::class, 'index'])->name('calendario.index');
//Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
