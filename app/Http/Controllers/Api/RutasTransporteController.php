<?php

namespace App\Http\Controllers\Api;

use App\Models\RutasTransporte;
use Orion\Http\Controllers\Controller;

class RutasTransporteController extends Controller
{
    protected $model = RutasTransporte::class;

    public function includes(): array
    {
        return ['departamento', 'vehiculo', 'servicio', 'clase'];
    }

    public function filterableBy(): array
    {
        return ['codigo_ruta', 'ruta', 'departamento.id'];
    }

    public function searchableBy(): array
    {
        return ['codigo_ruta', 'ruta', 'departamento.nombre', 'departamento.capital'];
    }
}
