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
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'Bicicleta',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'Motocicleta',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'Automovil',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'PickUp',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'Microbus',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'Bus',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'C2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'C3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'C2-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'C4',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T2-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T2-S2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T2-S3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T3-S1',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T3-S2',
            'nomenclatura' => null,
            'descripcion' => null
        ]);

        Vehiculo::create([
            'id_clasificacion_vehicular' => 1,
            'nombre' => 'T3-S3',
            'nomenclatura' => null,
            'descripcion' => null
        ]);
    }
}
