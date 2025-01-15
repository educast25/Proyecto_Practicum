<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_clinico', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('paciente_id');  // ID del paciente (relación con la tabla 'pacientes')
            $table->unsignedBigInteger('doctor_id');  // ID del doctor (relación con la tabla 'doctors')
            $table->text('descripcion');  // Descripción del diagnóstico o consulta
            $table->date('fecha_consulta');  // Fecha de la consulta médica
            $table->string('motivo_consulta');  // Motivo de la consulta médica
            $table->string('tratamiento');  // Tratamiento indicado
            $table->timestamps();  // Crea las columnas 'created_at' y 'updated_at'

            // Claves foráneas
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_clinico');
    }
};
