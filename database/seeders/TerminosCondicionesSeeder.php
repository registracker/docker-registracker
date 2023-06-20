<?php

namespace Database\Seeders;

use App\Models\TerminosCondiciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerminosCondicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TerminosCondiciones::create(['descripcion' => 'Términos y Condiciones de la Aplicación Registracker Aceptación de los Términos y Condiciones\nAl utilizar la aplicación Registracker, aceptas cumplir con los siguientes términos y condiciones. Si no estás de acuerdo con estos términos, te recomendamos que no utilices la aplicación.\nRecopilación de Datos de Desplazamiento\nLa aplicación Registracker recopila datos de desplazamiento utilizando las tecnologías de georeferenciación de tu dispositivo móvil. Estos datos incluyen tu ubicación geográfica, la hora y la fecha de los desplazamientos realizados. Estos datos serán utilizados en futuros análisis e investigaciones relacionados a la movilidad urbana que realice la Universidad de El Salvador.\nUso de los Datos Recopilados\nLos datos de desplazamiento recopilados se almacenarán de forma anónima y  se utilizarán exclusivamente para estudios y análisis relacionados a la movilidad urbana. No compartiremos tus datos de desplazamiento con terceros sin tu consentimiento previo, a menos que estemos legalmente obligados a hacerlo.\nPrivacidad y Seguridad\nNos tomamos en serio la privacidad y la seguridad de tus datos. Implementamos medidas de seguridad adecuadas para proteger tus datos de desplazamiento contra accesos no autorizados, uso indebido o divulgación. Además, cumplimos con todas las leyes y regulaciones aplicables en materia de protección de datos y privacidad.\nConsentimiento del Usuario\nAl utilizar la aplicación Registracker y permitir el acceso a las tecnologías de georreferenciación de tu dispositivo móvil, nos otorgas tu consentimiento para recopilar y utilizar tus datos de desplazamiento de acuerdo con los términos y condiciones establecidos en este documento.\nCambios en los Términos y Condiciones\nNos reservamos el derecho de actualizar o modificar estos términos y condiciones en cualquier momento. Cualquier cambio realizado será efectivo a partir de su publicación en la aplicación. Te recomendamos que revises periódicamente estos términos para estar al tanto de cualquier actualización.']);
    }
}
