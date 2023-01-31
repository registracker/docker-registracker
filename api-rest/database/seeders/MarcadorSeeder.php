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
                'nombre_marcador' => 'Parada de autobús',
                'md_icono_marcador' => 'bus-stop',
            ],
            [
                'id' => 2,
                'nombre_marcador' => 'Semáforo',
                'md_icono_marcador' => 'traffic-light',
            ],
            [
                'id' => 3,
                'nombre_marcador' => 'Alerta',
                'md_icono_marcador' => 'traffic-cone',
            ],
            [
                'id' => 4,
                'nombre_marcador' => 'Rampa de acceso',
                'md_icono_marcador' => 'wheelchair-accessibility',
            ],
        ];

        foreach ($data as $valor) {
            Marcador::create($valor);
        }
    }
}
