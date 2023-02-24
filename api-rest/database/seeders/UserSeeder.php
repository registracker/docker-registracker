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
            'name' => 'developer',
            'email' => 'developer@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $usuario->assignRole(Constant::ROL_ADMINISTRADOR);

        $user = $usuario->createToken($usuario->getNombreRoles(), []);
        echo ($user->plainTextToken);
    }
}
