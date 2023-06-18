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
                'nombre' => 'Hombre',
                'abreviatura' => 'H',
            ],
            [
                'nombre' => 'Mujer',
                'abreviatura' => 'M',
            ],
            [
                'nombre' => 'No Binario',
                'abreviatura' => 'NB',
            ],
            [
                'nombre' => 'Prefiero No Decirlo',
                'abreviatura' => 'PND',
            ],
        ];

        foreach ($data as $valor) {
            Genero::create($valor);
        }
    }
}
