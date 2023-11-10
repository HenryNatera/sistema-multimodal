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
        Schema::create('acreditables', function (Blueprint $table) {
            $table->id();
            $table->string('acreditable_name');
            $table->string('acreditable_profesor')->nullable();
            $table->string('acreditable_inscritos')->nullable();
            $table->string('acreditable_turno')->nullable();
            $table->string('acreditable_modalidad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acreditables');
    }
};
