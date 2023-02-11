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
        Schema::create('reporte_incidente', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('recorrido_id');
            $table->foreignId('id_incidente')->constrained('incidentes');
            $table->timestamp('fecha_reporte');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);
            $table->double('altitude')->nullable();
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
        Schema::dropIfExists('reporte_incidente');
    }
};
