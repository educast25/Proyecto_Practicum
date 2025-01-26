<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\CitaMedica;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CitaMedicaRelationshipTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Validar la relación entre CitaMedica y Enfermedad.
     */
    public function test_cita_medica_tiene_relacion_con_enfermedad()
    {
        // Crear un modelo CitaMedica
        $cita = new CitaMedica();

        // Verificar que la relación enfermedad() existe y es de tipo BelongsTo
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class, $cita->enfermedad());
    }
}
