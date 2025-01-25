<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('paciente'); // Rol del usuario: paciente, doctor, superadmin
            $table->string('especialidad')->nullable(); // Solo para doctores
            $table->unsignedBigInteger('paciente_id')->nullable(); // Relación con la tabla de pacientes (si es paciente)
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'especialidad', 'paciente_id']);
        });
    }
};

