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
        Schema::create('reporte_marcadores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_levantamiento')->constrained('levantamientos');
            $table->foreignId('id_marcador')->constrained('marcadores');
            // $table->double('latitud', 10, 8);
            // $table->double('longitud', 11, 8);
            $table->point('posicion');
            $table->double('altitud')->nullable();
            $table->string('comentario', 128)->nullable();
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
        Schema::dropIfExists('reporte_marcadores');
    }
};
