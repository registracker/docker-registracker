<?php

namespace Database\Seeders;

use App\Models\LevantamientoContador;
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
            'punto_aforo' => 'CA-1 SAN MIGUEL, EL DELIRIO –SAN MIGUEL y CA-1 LA UNION',
            'periodo_inicio' => null,
            'periodo_fin' => null
        ]);
    }
}
