<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'nombres' => $this->faker->name(), // Nombre aleatorio
            'especialidad' => $this->faker->randomElement(['Cardiología', 'Neurología', 'Pediatría', 'Dermatología']),
            'contacto' => $this->faker->phoneNumber(), // Proporciona un valor para 'contacto'
            'correo' => $this->faker->unique()->safeEmail(), // Proporciona un valor para 'correo'
        ];
    }
}

