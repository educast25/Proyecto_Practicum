<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\CitaMedica;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        // Total de pacientes
        $totalPacientes = Patient::count();

        // Total de doctores
        $totalDoctores = Doctor::count();

        // Total de citas médicas
        $totalCitas = CitaMedica::count();

        // Medicamentos recetados (opcional: filtrar por un rango de fechas)
        $totalMedicamentos = Medicamento::count();

        // Citas por especialidad
        $citasPorEspecialidad = Doctor::withCount('citasMedicas')
            ->get()
            ->map(function ($doctor) {
                return [
                    'especialidad' => $doctor->especialidad,
                    'citas' => $doctor->citas_medicas_count,
                ];
            });

        return view('estadisticas.index', compact(
            'totalPacientes',
            'totalDoctores',
            'totalCitas',
            'totalMedicamentos',
            'citasPorEspecialidad'
        ));
    }
}
