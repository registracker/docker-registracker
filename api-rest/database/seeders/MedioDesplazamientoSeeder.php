<?php

namespace Database\Seeders;

use App\Models\MedioDesplazamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedioDesplazamientoSeeder extends Seeder
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
                'nombre_medio_desplazamiento' => 'Autobús',
                'md_icono_medio_desplazamiento' => '🚌',
            ],
            [
                'id' => 2,
                'nombre_medio_desplazamiento' => 'Scooter',
                'md_icono_medio_desplazamiento' => '🛴',
            ],
            [
                'id' => 3,
                'nombre_medio_desplazamiento' => 'Bicicleta',
                'md_icono_medio_desplazamiento' => '🚲',
            ],
            [
                'id' => 4,
                'nombre_medio_desplazamiento' => 'Taxi',
                'md_icono_medio_desplazamiento' => '🚕',
            ],
            [
                'id' => 5,
                'nombre_medio_desplazamiento' => 'Vehículo',
                'md_icono_medio_desplazamiento' => '🚗',
            ],
            [
                'id' => 6,
                'nombre_medio_desplazamiento' => 'U.F.O.',
                'md_icono_medio_desplazamiento' => '🛸',
            ],
        ];

        foreach ($data as $valor) {
            MedioDesplazamiento::create($valor);
        }
    }
}
