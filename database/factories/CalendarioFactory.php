<?php

namespace Database\Factories;

use App\Models\Calendario;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalendarioFactory extends Factory
{
    protected $model = Calendario::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date(), // Genera una fecha aleatoria
            'hora' => $this->faker->time(), // Genera una hora aleatoria
            'motivo_cita' => $this->faker->sentence(), // Genera una descripción corta
            'paciente_id' => \App\Models\Patient::factory(), // Relación con un paciente
            'doctor_id' => \App\Models\Doctor::factory(), // Relación con un doctor
        ];
    }
}

