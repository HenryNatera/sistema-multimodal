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
        Schema::create('online_clases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regular_id')->nullable();
            $table->foreign('regular_id')
                ->references('id')->on('regulars')
                ->onDelete('set null');
            $table->string('plataforma');
            $table->string('contenido');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_class');
    }
};
