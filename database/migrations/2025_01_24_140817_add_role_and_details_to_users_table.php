<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('role')->default('paciente'); // Rol: paciente, doctor, superadmin
            //$table->unsignedBigInteger('paciente_id')->nullable(); // Relación con pacientes (si aplica)
            //$table->string('especialidad')->nullable(); // Especialidad solo para doctores
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'paciente_id', 'especialidad']);
        });
    }
};
