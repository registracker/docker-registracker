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
                'nombre' => 'Caminando',
                'icono' => 'mdi-walk',
            ],
            [
                'id' => 2,
                'nombre' => 'Autobús',
                'icono' => 'mdi-bus',
            ],
            [
                'id' => 3,
                'nombre' => 'Scooter',
                'icono' => 'mdi-scooter',
            ],
            [
                'id' => 4,
                'nombre' => 'Bicicleta',
                'icono' => 'mdi-bike',
            ],
            [
                'id' => 5,
                'nombre' => 'Taxi',
                'icono' => 'mdi-taxi',
            ],
            [
                'id' => 6,
                'nombre' => 'Vehículo',
                'icono' => 'mdi-car',
            ],
            [
                'id' => 7,
                'nombre' => 'U.F.O.',
                'icono' => 'mdi-ufo-outline',
            ],
        ];

        foreach ($data as $valor) {
            MedioDesplazamiento::create($valor);
        }
    }
}
