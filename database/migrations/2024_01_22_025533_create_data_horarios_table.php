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
        Schema::create('data_horarios', function (Blueprint $table) {
            $table->id();
            $table->Integer('horario_number');
            $table->Integer('pnf_id');
            $table->integer('dia');
            $table->integer('turno');
            $table->string('regular');
            $table->string('profesor');
            $table->integer('trayecto')->nullable();
            $table->integer('semestre')->nullable();
            $table->integer('trimestre')->nullable();
            $table->time('h_entrada');
            $table->time('h_salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_horarios');
    }
};
