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
        Schema::create('puntos_seguimiento', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('recorrido_id');
            $table->foreignId('id_medio_desplazamiento')->constrained('medios_desplazamiento');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);
            $table->double('altitude')->nullable();
            $table->double('precision')->nullable();
            $table->double('velocidad')->nullable();
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
        Schema::dropIfExists('puntos_seguimiento');
    }
};
