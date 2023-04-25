<?php

namespace App\Http\Controllers\Api;

use App\Models\ReporteMarcadores;
use Orion\Http\Controllers\Controller;

class ReporteMarcadoresController extends Controller
{
    protected $model = ReporteMarcadores::class;

    public function includes(): array
    {
        return ['levantamiento'];
    }

    public function filterableBy(): array
    {
        return ['levantamiento.codigo'];
    }
}
