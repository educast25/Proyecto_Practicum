<?php

namespace Tests\Unit;

use App\Models\HistorialMedico;
use Tests\TestCase;

class HistorialMedicoTest extends TestCase
{
    /** @test */
    public function it_can_create_a_historial_medico()
    {
        $historial = new HistorialMedico([
            'paciente_id' => 1,
            'doctor_id' => 2,
            'fecha' => '2025-01-24',
            'diagnostico' => 'Diagnóstico de prueba',
            'tratamiento' => 'Tratamiento de prueba',
            'medicamentos' => 'Medicamento A, Medicamento B',
        ]);

        $this->assertEquals(1, $historial->paciente_id);
        $this->assertEquals(2, $historial->doctor_id);
        $this->assertEquals('2025-01-24', $historial->fecha);
        $this->assertEquals('Diagnóstico de prueba', $historial->diagnostico);
        $this->assertEquals('Tratamiento de prueba', $historial->tratamiento);
        $this->assertEquals('Medicamento A, Medicamento B', $historial->medicamentos);
    }
}

