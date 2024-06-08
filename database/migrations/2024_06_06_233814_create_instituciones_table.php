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
        Schema::create('instituciones', function (Blueprint $table) {   // Define la estructura de la tabla 'instituciones'.
            $table->id(); // auto-incremental 'id' como clave primaria por default
            $table->string('codigo');
            $table->string('nombre');
            $table->smallInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituciones'); // Elimina la tabla 'instituciones' si existe.
    }
};
