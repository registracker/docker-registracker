<?php

namespace Database\Seeders;

use App\Models\SolicitudCuenta;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => env('ADMIN_NAME', 'developer'),
            'email' => env('ADMIN_EMAIL', 'developer@gmail.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
        ]);

        $usuario->assignRole(Constant::ROL_ADMINISTRADOR);

        $usuario2 = User::create([
            'name' => 'Usuario Investigador',
            'email' => 'investigador@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $usuario2->assignRole(Constant::ROL_INVESTIGADOR);

        $usuario3 = User::create([
            'name' => 'Usuario Participante',
            'email' => 'participante@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $usuario3->assignRole(Constant::ROL_PARTICIPANTE);

        $usuarioDaniel = User::create([
            'name' => 'Usuario Investigador',
            'email' => 'cv15018@ues.edu.sv',
            'password' => Hash::make('password'),
        ]);

        $usuarioDaniel->assignRole(Constant::ROL_INVESTIGADOR);

        // Esta línea ya no es necesaria ya que no se usa Sanctum
        // $user = $usuario->createToken($usuario->getNombreRoles(), []);
        // echo ($user->plainTextToken);
    }
}
