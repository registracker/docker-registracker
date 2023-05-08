<?php

namespace Database\Seeders;

use App\Models\ReporteContador;
use App\Models\Vehiculo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReporteContadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = Carbon::create(2022, 05, 01, 6);
        $vehiculos = Vehiculo::all();
        for ($i = 0; $i < 256; $i++) {
            ReporteContador::create([
                'id_levantamiento_contador' => 1,
                'id_vehiculo' => $vehiculos->random(1)->first()->id,
                'registrado' => $fecha->addSeconds(random_int(1, 60*5))
            ]);
        }
    }
}

[{id_medios_ruta_transporte:1, costo: null, agrupacion_medio_desplazamiento:1},{id_ruta_medios_transporte:null, costo: 0.30, agrupacion_medio_desplazamiento:2}]