<?php

namespace App\Http\Controllers\Api;

use App\Models\Desplazamiento;
use Illuminate\Database\Eloquent\Builder;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

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
    public function sortableBy() : array
    {
         return ['fecha_creado'];
    }

    public function filterableBy() : array
    {
        return ['fecha_creado'];
    }
}
