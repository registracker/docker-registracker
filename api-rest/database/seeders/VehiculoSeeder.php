<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculo::create([
            'nombre' => 'Bicicleta',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Motocicleta',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Automovil',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'PickUp',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Microbus',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Microbus Grande',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Bus',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'C2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'C3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'C2-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'C4',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T2-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T2-S2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T2-S3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T3-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T3-S2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'T3-S3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);
    }
}
