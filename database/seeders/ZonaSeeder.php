<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Zona::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data = [
            [
                'nombre' => 'Zona Occidental',
            ],
            [
                'nombre' => 'Zona Central',
            ],
            [
                'nombre' => 'Zona Paracentral',
            ],
            [
                'nombre' => 'Zona Oriental',
            ],
        ];

        foreach ($data as $valor) {
            Zona::create($valor);
        }

    }
}
