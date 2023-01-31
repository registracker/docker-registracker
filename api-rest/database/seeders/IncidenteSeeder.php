<?php

namespace Database\Seeders;

use App\Models\Incidente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nombre_incidente' => 'Tráfico pesado',
                'md_icono_incidente' => 'car-speed-limiter',
            ],
            [
                'id' => 2,
                'nombre_incidente' => 'Vehículo quedado',
                'md_icono_incidente' => 'car-off',
            ],
            [
                'id' => 3,
                'nombre_incidente' => 'Reten vehicular',
                'md_icono_incidente' => 'car',
            ],
            [
                'id' => 4,
                'nombre_incidente' => 'Protesta',
                'md_icono_incidente' => 'account-group
                ',
            ],
        ];

        foreach ($data as $valor) {
            Incidente::create($valor);
        }
    }
}
