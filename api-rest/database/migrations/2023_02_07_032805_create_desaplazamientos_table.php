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
        Schema::create('desplazamientos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('id_usuario')->constrained('users')->nullable();
            $table->integer('incidentes_reportados')->nullable();
            //TODO hacer triger que actualice el total
            //Averiguar calcular distancia entre coordenadas geo
            $table->double('distancia')->nullable();
            $table->double('velocidad_max')->nullable();//km
            $table->double('velocidad_media')->nullable();//km
            $table->double('elevacion_min')->nullable();//mts
            $table->double('elevacion_max')->nullable();//mts
            $table->integer('duracion')->nullable();
            $table->timestamp('inicio_desplazamiento')->nullable();
            $table->timestamp('fin_desplazamiento')->nullable();
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
        Schema::dropIfExists('desplazamientos');
    }
};
