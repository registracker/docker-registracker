<?php

namespace App\Http\Controllers\Api;

use App\Models\LevantamientoContador;
use Orion\Http\Controllers\RelationController;

class AgrupacionLevantamientoContadorController extends RelationController
{
    protected $model = LevantamientoContador::class;

    protected $relation = 'agrupacion';

}
