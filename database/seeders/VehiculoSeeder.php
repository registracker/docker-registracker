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
            'nombre' => 'Camión rígido C2',
            'nomenclatura' => 'C2',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Camión rígido C3',
            'nomenclatura' => 'C3',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Camión rígido C2-S1',
            'nomenclatura' => 'S1',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Camión rígido C4',
            'nomenclatura' => 'C4',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T2-S1',
            'nomenclatura' => 'T2-S1',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T2-S2',
            'nomenclatura' => 'T2-S2',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T2-S3',
            'nomenclatura' => 'T2-S3',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T3-S1',
            'nomenclatura' => 'T3-S1',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T3-S2',
            'nomenclatura' => 'T3-S2',
            'descripcion' => null
        ]);

        Vehiculo::create([
            'nombre' => 'Tractocamión T3-S3',
            'nomenclatura' => 'T3-S3',
            'descripcion' => null
        ]);
    }
}
