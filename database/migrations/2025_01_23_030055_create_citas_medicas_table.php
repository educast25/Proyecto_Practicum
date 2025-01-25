<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('citas_medicas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora'); // o $table->string('hora') si prefieres
            $table->string('motivo');
            
            // Llaves foráneas (asumiendo que ya existen las tablas patients, doctors, enfermedades)
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('enfermedad_id')->nullable();
            
            // Relaciones opcionales (si quieres onDelete, onUpdate, etc.)
            $table->foreign('paciente_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('enfermedad_id')->references('id')->on('enfermedades')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas_medicas');
    }
};
