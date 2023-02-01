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
                'nombre' => 'Tráfico pesado',
                'icono' => 'car-speed-limiter',
            ],
            [
                'id' => 2,
                'nombre' => 'Vehículo quedado',
                'icono' => 'car-off',
            ],
            [
                'id' => 3,
                'nombre' => 'Reten vehicular',
                'icono' => 'car',
            ],
            [
                'id' => 4,
                'nombre' => 'Protesta',
                'icono' => 'account-group
                ',
            ],
        ];

        foreach ($data as $valor) {
            Incidente::create($valor);
        }
    }
}
