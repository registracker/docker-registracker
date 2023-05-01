<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class ReporteMarcadoresRequest extends Request
{

    public function storeRules(): array
    {
        return [
            'codigo' => ['required', 'exists:levantamientos,codigo'],
            'id_marcador' => ['required', 'exists:marcadores,id'],
            'latitud' => ['required', 'numeric'],
            'longitud' => ['required', 'numeric'],
            'altitud' => ['nullable', 'numeric'],
            'comentario' => ['nullable']
        ];
    }

    public function storeMessages(): array
    {
        return [
            'codigo.required' => 'El campo codigo es requerido.',
            'codigo.exists' => 'El codigo no es válido.',
            'id_marcador.required' => 'El id_marcador es requerido.',
            'id_marcador.exists' => 'El id_marcador no es válido.',
            'latitud.required' => 'El campo latitud es requerido.',
            'latitud.numeric' => 'El campo latitud debe ser número.',
            'longitud.required' => 'El campo longitud es requerido.',
            'longitud.numeric' => 'El campo longitud debe ser número.',
            'altitud.numeric' => 'El campo altitud debe ser número.',
        ];
    }
}
