<?php

namespace App\Http\Controllers\Api;

use App\Models\ClasificacionVehicular;
use Orion\Http\Controllers\Controller;

class ClasificacionVehicularController extends Controller
{
    protected $model = ClasificacionVehicular::class;

    public function includes(): array
    {
        return ['clases'];
    }
}
