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
        Schema::create('regular_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('evaluation_type')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->unsignedBigInteger('regular_id')->nullable();
            $table->foreign('regular_id')
                        ->references('id')->on('regulars')
                        ->onDelete('set null');
            $table->integer('unidad_i')->nullable();
            $table->integer('unidad_ii')->nullable();
            $table->integer('unidad_iii')->nullable();
            $table->integer('unidad_iv')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_regular_evaluations');
    }
};
