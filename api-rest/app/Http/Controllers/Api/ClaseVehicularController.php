<?php

namespace App\Http\Controllers\Api;

use App\Models\ClaseVehicular;
use Orion\Http\Controllers\Controller;

class ClaseVehicularController extends Controller
{
    protected $model = ClaseVehicular::class;

    public function includes(): array
    {
        return ['vehiculos'];
    }
}
