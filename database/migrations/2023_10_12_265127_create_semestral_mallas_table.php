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
        Schema::create('semestral_mallas', function (Blueprint $table) {
            $table->id();
            $table->integer('num');
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->string('asignatura');
            $table->integer('semestre');
            $table->integer('ht')->nullable();
            $table->integer('htp')->nullable();
            $table->integer('hp')->nullable();
            $table->integer('th')->nullable();
            $table->integer('uc');
            $table->integer('prelacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semestral_mallas');
    }
};
