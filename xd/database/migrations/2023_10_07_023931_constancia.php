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
        Schema::create('constancia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_constancia');

            $table->unsignedBigInteger('mat_alu');
            $table->foreign('mat_alu')->references('id')->on('alumno')->ondelete('cascade');
            $table->unsignedBigInteger('clave_taller');
            $table->foreign('clave_taller')->references('id')->on('taller')->ondelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constancia');
    }
};
