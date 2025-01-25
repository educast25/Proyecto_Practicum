<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Muestra las citas médicas de un paciente específico.
     */
    public function index($pacienteId)
    {
        // Obtener las citas médicas del paciente
        $citas = CitaMedica::where('paciente_id', $pacienteId)
            ->with(['doctor'])
            ->get();

        return view('calendarios.index', compact('citas'));
    }
}
