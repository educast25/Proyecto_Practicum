<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::get('/citasmedicas', function () {
    return view('citasmedicas');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);