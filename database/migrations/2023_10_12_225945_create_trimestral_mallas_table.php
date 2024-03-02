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
        Schema::create('trimestral_mallas', function (Blueprint $table) {
            $table->id();
            $table->integer('num');
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->string('unidad_curricular');
            $table->integer('trayecto');
            $table->string('trimestre_i')->nullable();
            $table->string('uc_i')->nullable();
            $table->string('trimestre_ii')->nullable();
            $table->string('uc_ii')->nullable();
            $table->string('trimestre_iii')->nullable();
            $table->string('uc_iii')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trimestral_mallas');
    }
};
