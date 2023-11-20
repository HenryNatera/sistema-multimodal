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
        Schema::create('solicitudes_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')
                        ->references('id')->on('students')
                        ->onDelete('set null');
            $table->string('solicitud_tipo');
            $table->string('solicitud_view');
            $table->string('solicitud_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes_students');
    }
};
