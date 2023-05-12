<?php

namespace Database\Seeders;

use App\Models\SolicitudCuenta;
use App\Models\User;
use Illuminate\Database\Seeder;

class EstadoCuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usuarios = User::select('id')->get();
        foreach ($usuarios as $usuario) {
            SolicitudCuenta::create([
                'id_usuario' => $usuario->id,
                'id_estado_solicitud' => 1,
            ]);
        }

    }
}
