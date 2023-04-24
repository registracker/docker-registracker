<?php

namespace App\Http\Controllers\Api;

use App\Models\RutasTransporte;
use Orion\Http\Controllers\Controller;

class RutasTransporteController extends Controller
{
    protected $model = RutasTransporte::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['departamento', 'vehiculo', 'servicio', 'clase'];
    }

    public function filterableBy(): array
    {
        return ['codigo_ruta', 'ruta', 'departamento.id'];
    }
}
