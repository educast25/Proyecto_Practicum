<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calendario;

class CalendarioSeeder extends Seeder
{
    public function run()
    {
        // Genera 10 registros de citas médicas con relaciones
        Calendario::factory(10)->create();
    }
}
