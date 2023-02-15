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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_clase')->constrained('clases_vehicular');
            $table->string('nombre', 64);
            $table->string('nomenclatura', 64)->nullable();
            $table->integer('cantidad_ejes')->nullable();
            $table->double('peso_maximo',8,2)->nullable();
            $table->double('longitud_maxima',8,2)->nullable();
            $table->string('descripcion', 255)->nullable();
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
        Schema::dropIfExists('vehiculos');
    }
};
