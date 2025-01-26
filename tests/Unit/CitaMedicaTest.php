<?php

namespace Tests\Unit;

use App\Models\CitaMedica;
use PHPUnit\Framework\TestCase;

class CitaMedicaTest extends TestCase
{
    /**
     * Creacion de una Cita Medica se cree correctamente en memoria.
     */
    public function test_creacion_cita_medica_en_memoria()
    {
        $cita = new CitaMedica(['fecha'=>'2025-01-27','hora'=>'14:30','motivo'=>'Fiebre alta y dolor de cabeza','paciente_id'=>1,'doctor_id'=>1,'enfermedad_id'=>2,]);
        $this->assertEquals('2025-01-27',$cita->fecha);
        $this->assertEquals('14:30',$cita->hora);
        $this->assertEquals('Fiebre alta y dolor de cabeza',$cita->motivo);
        $this->assertEquals(1,$cita->paciente_id);
        $this->assertEquals(1,$cita->doctor_id);
        $this->assertEquals(2,$cita->enfermedad_id);
    }

    /**
     * Verificar que los fillable esten correctos.
     */

     public function test_fillable_CitaMedica(){
        $cita = new CitaMedica();
        $this->assertEquals([
            'fecha',
            'hora',
            'motivo',
            'paciente_id',
            'doctor_id',
            'enfermedad_id',    
        ],$cita->getFillable());

     }
}