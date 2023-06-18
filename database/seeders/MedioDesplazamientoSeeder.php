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
                'nombre' => 'Caminando',
                'icono' => 'walk',
            ],
            [
                'nombre' => 'Autobús',
                'icono' => 'bus',
            ],
            [
                'nombre' => 'Scooter',
                'icono' => 'scooter',
            ],
            [
                'nombre' => 'Bicicleta',
                'icono' => 'bike',
            ],
            [
                'nombre' => 'Taxi',
                'icono' => 'taxi',
            ],
            [
                'nombre' => 'Vehículo',
                'icono' => 'car',
            ],
            [
                'nombre' => 'Motocicleta',
                'icono' => 'motorbike',
            ],
            [
                'nombre' => 'Patineta',
                'icono' => 'skateboarding',
            ],
        ];

        foreach ($data as $valor) {
            MedioDesplazamiento::create($valor);
        }
    }
}
