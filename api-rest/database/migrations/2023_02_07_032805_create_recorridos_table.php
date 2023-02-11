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
        Schema::create('recorridos', function (Blueprint $table) {
            $table->uuid('identificador_recorrido')->primary();
            $table->integer('incidentes_reportados')->nullable();
            //AVeriguar calcular distancia entre coordenadas geo
            $table->double('distancia_km')->nullable();
            $table->double('velocidad_max_km')->nullable();
            $table->double('velocidad_media_km')->nullable();
            $table->double('elevacion_min_mts')->nullable();
            $table->double('elevacion_max_mts')->nullable();
            $table->time('duracion')->nullable();
            $table->timestamp('inicio_recorrido');
            $table->timestamp('fin_recorrido')->nullable();
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
        Schema::dropIfExists('recorridos');
    }
};
