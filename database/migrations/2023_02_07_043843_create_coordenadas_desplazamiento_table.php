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
        Schema::create('coordenadas_desplazamiento', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('desplazamiento_id');
            $table->foreignId('id_medio_desplazamiento')->constrained('medios_desplazamiento');
            $table->integer('agrupacion_medio_desplazamiento');
            $table->double('latitud', 10, 8);
            $table->double('longitud', 11, 8);
            $table->double('altitud')->nullable();
            $table->point('posicion');
            $table->double('velocidad')->nullable();
            $table->timestamp('fecha_registro')->nullable();
            // $table->double('precision')->nullable();
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
        Schema::dropIfExists('coordenadas_desplazamiento');
    }
};
