<?php

namespace App\Http\Controllers\Api;

use App\Models\Desplazamiento;
use Orion\Http\Controllers\Controller;

class DesplazamientoController extends Controller
{
    protected $model = Desplazamiento::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['detalle_medios_desplazamiento', 'detalle_medios_desplazamiento.medio_desplazamiento'];
    }
}
