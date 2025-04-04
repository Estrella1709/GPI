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
        Schema::create('entregables', function (Blueprint $table) {
            $table->id();
            $table->string('archivo');
            $table->date('fecha_entregado')->nullable();
            $table->date('fecha_limite');
            $table->foreignId('id_proyecto')->constrained('proyectos')->onDelete('cascade');
            $table->foreignId('id_formato')->constrained('formatos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregables');
    }
};
