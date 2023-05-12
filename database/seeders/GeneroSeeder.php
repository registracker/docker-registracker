<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nombre' => 'Hombre',
                'abreviatura' => 'H',
            ],
            [
                'id' => 2,
                'nombre' => 'Mujer',
                'abreviatura' => 'M',
            ],
            [
                'id' => 3,
                'nombre' => 'No Binario',
                'abreviatura' => 'NB',
            ],
            [
                'id' => 4,
                'nombre' => 'Prefiero No Decirlo',
                'abreviatura' => 'PND',
            ],
        ];

        foreach ($data as $valor) {
            Genero::create($valor);
        }
    }
}
