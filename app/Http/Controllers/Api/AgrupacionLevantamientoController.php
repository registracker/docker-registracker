<?php

namespace App\Http\Controllers\Api;

use App\Models\Levantamiento;
use Orion\Http\Controllers\RelationController;

class AgrupacionLevantamientoController extends RelationController
{
    protected $model = Levantamiento::class;

    protected $relation = 'agrupacion';

}
