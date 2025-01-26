<?php

namespace Tests\Unit;

use App\Models\Enfermedad;
use PHPUnit\Framework\TestCase;

class EnfermedadesTest extends TestCase
{
    /**
     * Verificar modelo enfermedad se cree correctamente en memoria.
     */
    public function test_creacion_enfermedad_en_memoria()
    {
        $enfermedad = new Enfermedad(['nombre'=>'Faringiti','descripcion'=> 'inflamacion en la garganta',]);
        $this->assertEquals('Faringiti',$enfermedad->nombre);
        $this->assertEquals('inflamacion en la garganta',$enfermedad->descripcion);
    }

    /**
     * Verificar que los fillable esten correctos.
     */

     public function test_fillable_enfermedad(){
        $enfermedad = new Enfermedad();
        $this->assertEquals([
            'nombre',
            'descripcion',            
        ],$enfermedad->getFillable());

     }
}
