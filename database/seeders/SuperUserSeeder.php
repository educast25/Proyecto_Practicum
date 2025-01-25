<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Importa el modelo User
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@hospital.com',
            'password' => Hash::make('admin123'),
            'role' => 'superadmin', // Asegúrate de que la columna 'role' exista en tu tabla 'users'
        ]);
    }
}


