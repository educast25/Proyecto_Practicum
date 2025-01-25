<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('historiales_medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id'); // Relación con la tabla de pacientes
            $table->unsignedBigInteger('doctor_id'); // Relación con la tabla de doctores
            $table->date('fecha'); // Fecha del evento médico
            $table->text('diagnostico'); // Diagnóstico médico
            $table->text('tratamiento')->nullable(); // Tratamiento aplicado (opcional)
            $table->text('medicamentos')->nullable(); // Medicamentos recetados (opcional)
            $table->timestamps();

            // Llaves foráneas
            $table->foreign('paciente_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiales_medicos');
    }
};


