<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas_transportes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_departamento')->constrained('departamentos');
            $table->string('codigo_ruta', 64);
            $table->string('ruta', 64);
            $table->string('denominacion')->nullable();
            $table->double('tarifa_autorizada', 8, 2)->nullable();
            $table->timestamp('fecha_creado')->nullable();
            $table->timestamp('fecha_actualizado')->nullable();
            $table->timestamp('fecha_eliminado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas_transportes');
    }
};
