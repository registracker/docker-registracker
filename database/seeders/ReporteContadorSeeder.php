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
        $fecha = Carbon::create(2023, 05, 16, 6);
        $vehiculos = Vehiculo::all();
        for ($i = 0; $i < 1024; $i++) {
            ReporteContador::create([
                'id_levantamiento_contador' => 1,
                'id_vehiculo' => $vehiculos->random(1)->first()->id,
                'registrado' => $fecha->addSeconds(random_int(1, 60))
            ]);
        }
    }
}