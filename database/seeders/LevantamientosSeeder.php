<?php

namespace Database\Seeders;

use App\Models\Levantamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevantamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Levantamiento::create([
            'id_usuario' => 1,
            'codigo' => Constant::ULID_BASE,
            'fecha_vencimiento' => null
        ]);
    }
}
