<?php

namespace App\Http\Controllers\Api;

use App\Models\DetalleMedioRecorrido;
use Orion\Http\Controllers\Controller;

class DetalleMedioRecorridoController extends Controller
{
    protected $model = DetalleMedioRecorrido::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['medio_desplazamiento'];
    }

}
