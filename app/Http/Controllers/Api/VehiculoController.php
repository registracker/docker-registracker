<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehiculo;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Builder;

class VehiculoController extends Controller
{
    protected $model = Vehiculo::class;

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        return $query->orderBy('id', 'desc');
    }
}
