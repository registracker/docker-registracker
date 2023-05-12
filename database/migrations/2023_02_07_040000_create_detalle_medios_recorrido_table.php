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
        Schema::create('detalle_medios_recorrido', function (Blueprint $table) {
            $table->id();
            // $table->uuid('desplazamiento_id');
            $table->foreignUuid('desplazamiento_id')->constrained('desplazamientos');
            $table->foreignId('id_medio_desplazamiento')->constrained('medios_desplazamiento');
            $table->time('duracion');
            $table->string('ruta')->nullable();
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
        Schema::dropIfExists('detalle_medios_recorrido');
    }
};
