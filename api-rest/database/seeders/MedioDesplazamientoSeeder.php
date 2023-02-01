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
                'nombre' => 'Autobús',
                'icono' => '🚌',
            ],
            [
                'id' => 2,
                'nombre' => 'Scooter',
                'icono' => '🛴',
            ],
            [
                'id' => 3,
                'nombre' => 'Bicicleta',
                'icono' => '🚲',
            ],
            [
                'id' => 4,
                'nombre' => 'Taxi',
                'icono' => '🚕',
            ],
            [
                'id' => 5,
                'nombre' => 'Vehículo',
                'icono' => '🚗',
            ],
            [
                'id' => 6,
                'nombre' => 'U.F.O.',
                'icono' => '🛸',
            ],
        ];

        foreach ($data as $valor) {
            MedioDesplazamiento::create($valor);
        }
    }
}
