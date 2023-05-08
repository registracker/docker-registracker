<?php

namespace Database\Seeders;

use App\Models\LevantamientoContador;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevantamientoContadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LevantamientoContador::create([
            'id_usuario' => 1,
            'codigo' => Constant::ULID_BASE,
            'nombre_via' => 'CA-1 SAN MIGUEL, EL DELIRIO –SAN MIGUEL y CA-1 LA UNION',
            'periodo_inicio' => Carbon::create(2022, 2, 2),
            'periodo_fin' => Carbon::create(2022, 2, 5),
            'identificacion_via' => 'Urbana',
            'categoria_via' => 'Carretera',
            'numero_carriles' => '2 carriles de oriente a poniente',
        ]);
    }
}
