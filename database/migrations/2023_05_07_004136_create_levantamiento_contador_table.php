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
        Schema::create('levantamiento_contador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('users');
            $table->string('codigo', 128);
            $table->string('nombre_via');
            $table->string('identificacion_via');
            $table->string('categoria_via');
            $table->string('numero_carriles');
            $table->date('periodo_inicio')->nullable();
            $table->date('periodo_fin')->nullable();
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
        Schema::dropIfExists('levantamiento_contador');
    }
};
