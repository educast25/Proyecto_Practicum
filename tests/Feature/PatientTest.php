<?php

namespace Tests\Feature;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_create_patient()
    {
        $data = [
            'nombre' => 'Juan Pérez',
            'ciudad' => 'Quito',
            'direccion' => 'Av. Principal 123',
            'fecha_nacimiento' => '1990-05-15',
            'edad' => 33,
            'contacto' => '0987654321',
        ];

        $response = $this->post(route('patients.store'), $data);

        $response->assertRedirect(route('patients.index'));
        $this->assertDatabaseHas('patients', $data);
    }
}

