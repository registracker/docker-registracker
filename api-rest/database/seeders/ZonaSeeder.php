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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Zona::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data = [
            [
                'id' => 1,
                'nombre' => 'Zona Occidental',
            ],
            [
                'id' => 2,
                'nombre' => 'Zona Central',
            ],
            [
                'id' => 3,
                'nombre' => 'Zona Paracentral',
            ],
            [
                'id' => 4,
                'nombre' => 'Zona Oriental',
            ],
        ];
        Zona::insert($data);
    }
}
