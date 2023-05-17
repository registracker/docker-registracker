<?php

namespace Database\Seeders;

use App\Models\ReporteMarcadores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReporteMarcadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReporteMarcadores::create([
            'id_usuario' => 1,
            'id_levantamiento' => 1,
            'id_marcador' => 1,
            'posicion' => DB::raw("ST_SetSRID(ST_Point(-89.1998, 13.716789), 4326)"),
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        ReporteMarcadores::create([
            'id_usuario' => 1,
            'id_levantamiento' => 1,
            'id_marcador' => 2,
            'posicion' => DB::raw("ST_SetSRID(ST_Point( -89.206324, 13.714913), 4326)"),
        ]);

        ReporteMarcadores::create([
            'id_usuario' => 1,
            'id_levantamiento' => 1,
            'id_marcador' => 3,
            'posicion' => DB::raw("ST_SetSRID(ST_Point(-89.215765, 13.704365), 4326)"),
        ]);

        ReporteMarcadores::create([
            'id_usuario' => 1,
            'id_levantamiento' => 1,
            'id_marcador' => 4,
            'posicion' => DB::raw("ST_SetSRID(ST_Point(-89.149718, 13.698486), 4326)"),
            'comentario' => 'Ut ornare placerat sodales.'
        ]);
    }
}
