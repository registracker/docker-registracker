<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use Orion\Http\Controllers\Controller;

class DepartamentoMunicipioController extends Controller
{
    protected $model = Departamento::class;

    protected $relation = 'municipios';
}
