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
        Schema::create('regulars', function (Blueprint $table) {
            $table->id();
            $table->integer('malla');
            $table->string('regular_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->string('regular_turno')->nullable();
            $table->integer('regular_modalidad')->nullable();
            $table->integer('regular_trayecto')->nullable();
            $table->integer('regular_trimestre')->nullable();
            $table->integer('regular_semestre')->nullable();
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                         ->references('id')->on('pnfs')
                         ->onDelete('set null');
            $table->unsignedBigInteger('periodo_id')->nullable();
            $table->foreign('periodo_id')
                         ->references('id')->on('periodos')
                         ->onDelete('set null');
            $table->string('clasroom_url')->nullable();
            $table->string('zoom_url')->nullable();
            $table->string('otro_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_regulars');
    }
};
