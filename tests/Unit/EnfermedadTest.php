<?php

namespace Tests\Unit;

use App\Models\Enfermedad;
use Tests\TestCase;

class EnfermedadTest extends TestCase
{
    /** @test */
    public function it_can_create_an_enfermedad()
    {
        // Crear una enfermedad en memoria
        $enfermedad = new Enfermedad([
            'nombre' => 'Gripe',
            'descripcion' => 'Infección viral que afecta el sistema respiratorio',
        ]);

        // Verificar que los datos coincidan
        $this->assertEquals('Gripe', $enfermedad->nombre);
        $this->assertEquals('Infección viral que afecta el sistema respiratorio', $enfermedad->descripcion);
    }

    /**
     * Verificar que los fillable esten correctos.
     */
    public function it_has_correct_fillable_properties()
{
    $enfermedad = new Enfermedad();

    $this->assertEquals([
        'nombre',
        'descripcion',
    ], $enfermedad->getFillable());
}
}
