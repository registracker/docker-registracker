<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use Orion\Http\Controllers\Controller;

class DepartamentoController extends Controller
{
    protected $model = Departamento::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['municipios'];
    }
}
