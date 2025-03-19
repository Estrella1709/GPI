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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('ogeneral');
            $table->integer('integrantes');
            $table->date('fecha_entregado')->nullable();
            $table->date('fecha_limite');
            $table->foreignId('id_lider')->constrained('lideres')->onDelete('cascade');
            $table->foreignId('id_asesor')->constrained('asesores')->onDelete('cascade');
            $table->foreignId('id_estado')->constrained('estados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
