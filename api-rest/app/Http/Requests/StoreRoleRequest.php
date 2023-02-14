<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [[
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'password' => ['required'],
            'nombre_usuario' => ['nullable'],
            'rol' => ['required', 'exists:roles,id'],
        ], [
            'email' => 'El correo es requerido y debe ser único.',
            'password' => 'Debe agregar password.',
            'rol' => 'El rol es inválido.'
        ]];
    }
}
