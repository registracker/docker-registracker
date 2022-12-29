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
        Schema::create('detalle_persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_genero')->constrained('generos')->nullable();
            $table->foreignId('id_universidad')->constrained('universidades')->nullable();
            $table->foreignId('id_clasificacion_carrera')->constrained('clasificacion_carreras')->nullable();
            $table->date('fecha_nacimiento')->nullable();
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
        Schema::dropIfExists('detalle_persona');
    }
};
