<?php

namespace Database\Seeders;

use App\Models\Universidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ["nombre" => "Otra Universidad", "abreviatura" => "-"],
            ["nombre" => "Universidad de El Salvador", "abreviatura" => "UES"],
            ["nombre" => "Universidad Centroamericana José Simeón Cañas", "abreviatura" => "UCA"],
            ["nombre" => "Universidad Pedagógica de El Salvador"],
            ["nombre" => "Universidad Don Bosco El Salvador"],
            ["nombre" => "Universidad Tecnológica de El Salvador"],
            ["nombre" => "Universidad Dr José Matias Delgado"],
            ["nombre" => "Universidad Francisco Gavidia"],
            ["nombre" => "Instituto Tecnológico de Usulután"],
            ["nombre" => "Universidad de Oriente El Salvador"],
            ["nombre" => "Universidad Católica de El Salvador"],
            ["nombre" => "Universidad Gerardo Barrios"],
            ["nombre" => "Universidad Evangélica de El Salvador"],
            ["nombre" => "Escuela Superior de Economia y Negocios"],
            ["nombre" => "Universidad Politécnica de El Salvador"],
            ["nombre" => "Instituto Tecnológico Centroamericano"],
            ["nombre" => "Universidad Dr Andres Bello"],
            ["nombre" => "Universidad Luterana Salvadoreña"],
            ["nombre" => "Universidad Salvadoreña Alberto Masferrer"],
            ["nombre" => "Universidad Autónoma de Santa Ana"],
            ["nombre" => "Universidad Monseñor Oscar Arnulfo Romero"],
            ["nombre" => "Escuela de Comunicación Mónica Herrera"],
            ["nombre" => "Universidad Panamericana de El Salvador"],
            ["nombre" => "Universidad Nueva San Salvador"],
            ["nombre" => "Universidad Modular Abierta"],
            ["nombre" => "Universidad Albert Einstein"],
            [
                "nombre" =>
                "Academia Nacional de Seguridad Pública República de El Salvador",
            ],
            ["nombre" => "Universidad de Sonsonate"],
            ["nombre" => "Universidad Cristiana de las Asambleas de Dios"],
            ["nombre" => "Instituto Especializado de Formación Diplomática IESFORD"],
            ["nombre" => "Instituto Superior de Economia y Administración de Empresas"],
            ["nombre" => "Instituto Tecnológico de Chalatenango"],
            ["nombre" => "Universidad Técnica Latinoamericana"],
            [
                "nombre" =>
                "Instituto Especializado de Educación Superior El Espíritu Santo",
            ],
            ["nombre" => "Escuela Nacional de Agricultura Roberto Quiñonez"],
            [
                "nombre" =>
                "Instituto Especializado de Profesionales de la Salud IEPROES",
            ],
            [
                "nombre" =>
                "Instituto Especializado de Nivel Superior Centro Cultural Salvadoreño Americano",
            ],
            ["nombre" => "Escuela Superior Franciscana Especializada AGAPE"],
            ["nombre" => "Escuela Militar Capitán General Gerardo Barrios"],
            ["nombre" => "Instituto Tecnológico Escuela Técnica para la Salud"],
        ];

        foreach ($data as $valor) {
            Universidad::create($valor);
        }
    }
}
