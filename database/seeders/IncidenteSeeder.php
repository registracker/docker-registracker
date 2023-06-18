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
                'nombre' => 'Tráfico pesado',
                'icono' => 'car-speed-limiter',
            ],
            [
                'nombre' => 'Vehículo quedado',
                'icono' => 'car-off',
            ],
            [
                'nombre' => 'Reten vehicular',
                'icono' => 'car',
            ],
            [
                'nombre' => 'Protesta',
                'icono' => 'account-group',
            ],
        ];

        foreach ($data as $valor) {
            Incidente::create($valor);
        }
    }
}
