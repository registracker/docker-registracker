<?php

namespace Database\Seeders;

use App\Models\EstadoSolicitud;
use Illuminate\Database\Seeder;

class EstadoSolicitudSeeder extends Seeder
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
                'nombre' => 'Activa',
                'permitir_acceso' => true,
            ],
            [
                'id' => 2,
                'nombre' => 'Rechazada',
                'permitir_acceso' => false,
            ],
            [
                'id' => 3,
                'nombre' => 'En revisión',
                'permitir_acceso' => false,
            ],
            [
                'id' => 4,
                'nombre' => 'Suspendida',
                'permitir_acceso' => false,
            ],
        ];

        foreach ($data as $valor) {
            EstadoSolicitud::create($valor);
        }
    }
}
