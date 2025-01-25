<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(), // Nombre aleatorio
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '2000-01-01'), // Fecha aleatoria antes del 2000
            'direccion' => $this->faker->address(), // Dirección generada automáticamente
        ];
    }
}
