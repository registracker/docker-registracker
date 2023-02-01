<?php

namespace Database\Seeders;

use App\Models\Marcador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcadorSeeder extends Seeder
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
                'nombre' => 'Parada de autobús',
                'icono' => 'bus-stop',
            ],
            [
                'id' => 2,
                'nombre' => 'Semáforo',
                'icono' => 'traffic-light',
            ],
            [
                'id' => 3,
                'nombre' => 'Alerta',
                'icono' => 'traffic-cone',
            ],
            [
                'id' => 4,
                'nombre' => 'Rampa de acceso',
                'icono' => 'wheelchair-accessibility',
            ],
        ];

        foreach ($data as $valor) {
            Marcador::create($valor);
        }
    }
}
