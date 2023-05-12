<?php

namespace App\Http\Controllers\Api;

use App\Models\Zona;
use Orion\Http\Controllers\RelationController;

class ZonaDepartamentoController extends RelationController
{
    protected $model = Zona::class;

    protected $relation = 'departamentos';
}
