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
                'icono' => 'walk',
            ],
            [
                'id' => 2,
                'nombre' => 'Autobús',
                'icono' => 'bus',
            ],
            [
                'id' => 3,
                'nombre' => 'Scooter',
                'icono' => 'scooter',
            ],
            [
                'id' => 4,
                'nombre' => 'Bicicleta',
                'icono' => 'bike',
            ],
            [
                'id' => 5,
                'nombre' => 'Taxi',
                'icono' => 'taxi',
            ],
            [
                'id' => 6,
                'nombre' => 'Vehículo',
                'icono' => 'car',
            ],
            [
                'id' => 7,
                'nombre' => 'Motocicleta',
                'icono' => 'motorbike',
            ],
            [
                'id' => 8,
                'nombre' => 'Patineta',
                'icono' => 'skateboarding',
            ],
        ];

        foreach ($data as $valor) {
            MedioDesplazamiento::create($valor);
        }
    }
}
