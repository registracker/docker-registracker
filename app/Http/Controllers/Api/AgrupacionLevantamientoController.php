<?php

namespace App\Http\Controllers\Api;

use App\Models\Levantamiento;
use Orion\Http\Controllers\RelationController;
use Illuminate\Database\Eloquent\Casts\Attribute;

class AgrupacionLevantamientoController extends RelationController
{
    protected $model = Levantamiento::class;

    protected $relation = 'agrupacion';
}
