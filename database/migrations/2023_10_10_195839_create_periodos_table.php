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
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->integer('carga');
            $table->integer('solicitud');
            $table->integer('resagada');
            $table->integer('acreditable');
            $table->integer('pasantia');
            $table->integer('inscripcion');
            $table->integer('cambio');
            $table->integer('trimestre');
            $table->date('trimestral_lapso_inicio')->nullable();
            $table->date('trimestral_lapso_cierre')->nullable();
            $table->integer('semestre');
            $table->date('semestral_lapso_inicio')->nullable();
            $table->date('semestral_lapso_cierre')->nullable();
            $table->integer('revision');
            $table->integer('lapso_trimestral');
            $table->integer('lapso_semestral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos');
    }
};
