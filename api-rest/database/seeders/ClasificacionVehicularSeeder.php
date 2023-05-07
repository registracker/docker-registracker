<?php

namespace Database\Seeders;

use App\Models\ClasificacionVehicular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasificacionVehicularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClasificacionVehicular::create([
            'nombre' => 'Clasificación corta VMT',
            'descripcion' => null
        ]);
    }
}
