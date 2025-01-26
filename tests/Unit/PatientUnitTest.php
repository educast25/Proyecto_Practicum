<?php

namespace Tests\Unit;

use App\Models\Patient;
use Tests\TestCase;

class PatientUnitTest extends TestCase
{
    /** @test */
    public function it_can_create_a_patient()
    {
        // Crear un paciente en memoria
        $patient = Patient::factory()->make([
            'nombre' => 'Juan Pérez',
            'ciudad' => 'Quito',
            'direccion' => 'Av. Principal 123',
            'fecha_nacimiento' => '1990-05-15',
            'edad' => 33,
            'contacto' => '0987654321',
        ]);

        // Verificar que los datos coincidan
        $this->assertEquals('Juan Pérez', $patient->nombre);
        $this->assertEquals('Quito', $patient->ciudad);
        $this->assertEquals('Av. Principal 123', $patient->direccion);
        $this->assertEquals('1990-05-15', $patient->fecha_nacimiento);
        $this->assertEquals(33, $patient->edad);
        $this->assertEquals('0987654321', $patient->contacto);
    }

    /** @test */
    public function it_has_correct_fillable_properties()
    {
        $patient = new Patient();

        // Verifica que los campos fillable sean correctos
        $this->assertEquals([
            'nombre',
            'ciudad',
            'direccion',
            'fecha_nacimiento',
            'edad',
            'contacto',
        ], $patient->getFillable());
    }
}

