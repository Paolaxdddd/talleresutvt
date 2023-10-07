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
        Schema::create('taller', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_taller');

            
            $table->unsignedBigInteger('mat_alu');
            $table->foreign('mat_alu')->references('id')->on('alumno')->ondelete('cascade');
            $table->unsignedBigInteger('clave_profesor');
            $table->foreign('clave_profesor')->references('id')->on('profesor')->ondelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taller');
    }
};
