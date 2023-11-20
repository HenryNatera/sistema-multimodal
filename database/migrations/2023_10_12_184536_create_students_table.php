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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->string('student_cedula')->unique();
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->unsignedBigInteger('periodo_id')->nullable();
            $table->foreign('periodo_id')
                        ->references('id')->on('periodos')
                        ->onDelete('set null');
            $table->integer('turno');
            $table->string('trayecto')->nullable();
            $table->string('semestre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
