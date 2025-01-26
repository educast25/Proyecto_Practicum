<?php

namespace Tests\Feature;

use App\Models\Enfermedad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnfermedadFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_enfermedades()
    {
        // Crear datos ficticios
        Enfermedad::factory()->count(3)->create();

        // Hacer la solicitud a la ruta index
        $response = $this->get(route('enfermedades.index'));

        // Verificar que el estado sea 200 (OK)
        $response->assertStatus(200);

        // Verificar que la vista tenga datos
        $response->assertViewHas('enfermedades');
    }
}