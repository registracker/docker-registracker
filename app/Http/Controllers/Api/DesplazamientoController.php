<?php

namespace App\Http\Controllers\Api;

use App\Models\Desplazamiento;
use Database\Seeders\Constant;
use Illuminate\Database\Eloquent\Builder;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

class DesplazamientoController extends Controller
{
    protected $model = Desplazamiento::class;

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

    public function searchableBy() : array
    {
        return ['id'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        if (!$this->resolveUser()->hasRole(Constant::ROL_ADMINISTRADOR)) {
            $query->where('id_usuario', $this->resolveUser()->id);
        }
        return $query;
    }
}
