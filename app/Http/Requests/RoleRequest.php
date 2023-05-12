<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class RoleRequest extends Request
{

    public function storeRules(): array
    {
        return [
            'nombre_rol' => ['required', 'unique:roles,name', 'max:255'],
            'permisos' => ['required', 'exists:permissions,name', 'distinct:strict'],
        ];
    }

    public function messages()
    {
        return [
            'nombre_rol.required' => 'El nombre del rol es requerido.',
            'nombre_rol.unique' => 'El nombre del rol ya existe.',
            'nombre_rol.max' => 'La longitud no debe superar los 255 caracteres.',
            'permisos.required' => 'Debe agregar al menos un permiso.',
            'permisos.exists' => 'El permiso no existe.',
            'permisos.distinct' => 'Los permisos deben ser distintos.',
        ];
    }

}
