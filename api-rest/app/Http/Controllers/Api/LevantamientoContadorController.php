<?php

namespace App\Http\Controllers\Api;

use App\Models\LevantamientoContador;
use Orion\Http\Controllers\Controller;

class LevantamientoContadorController extends Controller
{
    protected $model = LevantamientoContador::class;

    public function includes(): array
    {
        return ['usuario'];
    }
}
