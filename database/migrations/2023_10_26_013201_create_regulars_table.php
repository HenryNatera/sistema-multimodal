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
            $table->string('regular_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->string('regular_turno')->nullable();
            $table->string('regular_modalidad')->nullable();
            $table->string('regular_trayecto')->nullable();
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                         ->references('id')->on('pnfs')
                         ->onDelete('set null');
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
