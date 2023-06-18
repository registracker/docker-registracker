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
                'nombre' => 'Activa',
                'permitir_acceso' => true,
            ],
            [
                'nombre' => 'En revisión',
                'permitir_acceso' => false,
            ],
            [
                'nombre' => 'Suspendida',
                'permitir_acceso' => false,
            ],
            [
                'nombre' => 'Rechazada',
                'permitir_acceso' => false,
            ],
        ];

        foreach ($data as $valor) {
            EstadoSolicitud::create($valor);
        }
    }
}
