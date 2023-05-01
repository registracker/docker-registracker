<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class ReporteMarcadoresRequest extends Request
{

    public function updateRules(): array
    {
        return [
            'id' => ['required', 'integer', 'min:88'],
            'name' => ['required', 'unique:permissions,name', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'El id es requerido.',
            'id.integer' => 'El id debe ser entero.',
            'name.required' => 'Debe agregar al menos un permiso.',
            'name.unique' => 'El permiso debe ser único.',
            'name.max' => 'Los permisos no debe superar los 255 caracteres.',
        ];
    }
}
