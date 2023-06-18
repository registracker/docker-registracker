<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
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
                "nombre" => "Ahuachapán",
                "iso31662" => "SV-AH",
                "capital" => "Ahuachapán",
                "id_zona" => 1,
            ],
            [
                "nombre" => "Santa Ana",
                "iso31662" => "SV-SA",
                "capital" => " Santa Ana",
                "id_zona" => 1,
            ],
            [
                "nombre" => "Sonsonate",
                "iso31662" => "SV-SO",
                "capital" => " Sonsonate",
                "id_zona" => 1,
            ],
            [
                "nombre" => "Chalatenango",
                "iso31662" => "SV-CH",
                "capital" => "Chalatenango",
                "id_zona" => 2,
            ],
            [
                "nombre" => "Cuscatlán",
                "iso31662" => "SV-CU",
                "capital" => "Cojutepeque",
                "id_zona" => 2,
            ],
            [
                "nombre" => "San Salvador",
                "iso31662" => "SV-SS",
                "capital" => "San Salvador",
                "id_zona" => 2,
            ],
            [
                "nombre" => "La Libertad",
                "iso31662" => "SV-LI",
                "capital" => "Santa Tecla",
                "id_zona" => 2,
            ],
            [
                "nombre" => "San Vicente",
                "iso31662" => "SV-SV",
                "capital" => "San Vicente",
                "id_zona" => 3,
            ],
            [
                "nombre" => "Cabañas",
                "iso31662" => "SV-CA",
                "capital" => " Sensuntepeque",
                "id_zona" => 3,
            ],
            [
                "nombre" => "La Paz",
                "iso31662" => "SV-PA",
                "capital" => "Zacatecoluca",
                "id_zona" => 3,
            ],
            [
                "nombre" => "Usulután",
                "iso31662" => "SV-US",
                "capital" => " Usulután",
                "id_zona" => 4,
            ],
            [
                "nombre" => "San Miguel",
                "iso31662" => "SV-SM",
                "capital" => "San Miguel",
                "id_zona" => 4,
            ],
            [
                "nombre" => "Morazán",
                "iso31662" => "SV-MO",
                "capital" => "San Francisco Gotera",
                "id_zona" => 4,
            ],
            [
                "nombre" => "La Unión",
                "iso31662" => "SV-UN",
                "capital" => "La Unión",
                "id_zona" => 4,
            ],
        ];
        foreach ($data as $valor) {
            Departamento::create($valor);
        }

    }
}
