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
                'nombre' => 'Parada de autobús',
                'icono' => 'bus-stop',
            ],
            [
                'nombre' => 'Semáforo',
                'icono' => 'traffic-light',
            ],
            [
                'nombre' => 'Alerta',
                'icono' => 'traffic-cone',
            ],
            [
                'nombre' => 'Rampa de acceso',
                'icono' => 'wheelchair-accessibility',
            ],
        ];

        foreach ($data as $valor) {
            Marcador::create($valor);
        }
    }
}
