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
        Schema::create('reportes_incidentes', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('desplazamiento_id');
            $table->foreignId('id_incidente')->constrained('incidentes');
            $table->timestamp('fecha_reporte');
            $table->double('latitud', 10, 8);
            $table->double('longitud', 11, 8);
            $table->double('altitud')->nullable();
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
        Schema::dropIfExists('reportes_incidentes');
    }
};
