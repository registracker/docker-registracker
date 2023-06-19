<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reporte_contador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_levantamiento_contador')->constrained('levantamiento_contador');
            $table->foreignId('id_vehiculo')->constrained('vehiculos');
            $table->timestamp('registrado')->nullable();
            $table->timestamp('fecha_creado')->nullable();
            $table->timestamp('fecha_actualizado')->nullable();
            $table->timestamp('fecha_eliminado')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reporte_contador');
    }
};
