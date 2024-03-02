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
        Schema::create('evaluation_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->integer('turno');
            $table->unsignedBigInteger('regular_id')->nullable();
            $table->foreign('regular_id')
                        ->references('id')->on('regulars')
                        ->onDelete('set null');
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->string('ev_i');
            $table->string('ev_ii');
            $table->string('ev_iii');
            $table->string('ev_iv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_plans');
    }
};
