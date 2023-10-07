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
        Schema::create('carrera', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_carrera');
            $table->string('duracion_carrera');
            $table->string('docencia_carrera');
            
            

            $table->unsignedBigInteger('mat_alu');
            $table->foreign('mat_alu')->references('id')->on('alumno')->ondelete('cascade');
            
            $table->timestamps();



         
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('carrera');

    }
};
