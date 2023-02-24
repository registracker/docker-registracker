<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Orion\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    protected $model = User::class;

    public function includes(): array
    {
        return ['solicitud.estado', 'solicitud'];
    }
}
