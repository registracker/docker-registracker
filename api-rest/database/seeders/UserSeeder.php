<?php

namespace Database\Seeders;

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
        $nombrePermisos = $usuario->getPermisos();

        $user = $usuario->createToken(Constant::ROL_ADMINISTRADOR,  $nombrePermisos);
        echo ($user->plainTextToken);
    }
}
