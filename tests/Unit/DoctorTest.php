<?php

namespace Tests\Unit;

use App\Models\Doctor;
use PHPUnit\Framework\TestCase;

class DoctorTest extends TestCase
{
    /**
     * Verificar modelo doctor se cree correctamente en memoria.
     */
    public function test_creacion_Doctor_en_memoria()
    {
        $doctor = new Doctor(['nombres'=>'Alice','especialidad'=> 'Cardiologo','contacto'=>'0923586412','correo'=>'Alice@hospital.com','sexo'=>'Femenino',]);
        $this->assertEquals('Alice',$doctor->nombres);
        $this->assertEquals('Cardiologo',$doctor->especialidad);
        $this->assertEquals('0923586412',$doctor->contacto);
        $this->assertEquals('Alice@hospital.com',$doctor->correo);
        $this->assertEquals('Femenino',$doctor->sexo);
    }

    /**
     * Verificar que los fillable esten correctos.
     */

     public function test_fillable_doctor(){
        $doctor = new Doctor();
        $this->assertEquals([
            'nombres', 
            'especialidad', 
            'contacto', 
            'correo', 
            'sexo',            
        ],$doctor->getFillable());

     }
}

