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
        $separator = ':';
        $accionesDisponibles = collect(['listar', 'crear', 'actualizar', 'eliminar']);
        $tablas = collect(['zona', 'departamento', 'municipio', 'genero', 'universidad']);
        $permisos = collect([]);

        foreach ($tablas as $tabla) {
            foreach ($accionesDisponibles as $accion) {
                $permisos->push(collect([$tabla, $accion])->join($separator));
            }
        }

        $usuario = User::create([
            'name' => 'developer',
            'email' => 'developer@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user = $usuario->createToken('developer',  $permisos->toArray());
        echo ($user->plainTextToken);
    }
}
