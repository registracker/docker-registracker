<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class UsuarioRequest extends Request
{

    public function updateRules(): array
    {
        return [
            'password' => ['string', 'min:8'],
            'rol' => ['exists:roles,name', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'password.string' => 'Cadena no válida para el campo password.',
            'password.min' => 'La password debe tener al menos 8 caracteres.',
            'rol.exists' => 'Debe agregar al menos un permiso.',
            'rol.max' => 'El permiso no debe superar los 255 caracteres.',
        ];
    }
}
