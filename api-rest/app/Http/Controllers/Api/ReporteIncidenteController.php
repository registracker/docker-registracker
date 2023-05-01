<?php

namespace App\Http\Controllers\Api;

use App\Models\ReporteIncidente;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ReporteIncidenteController extends Controller
{
    protected $model = ReporteIncidente::class;

    protected function performStore(Request $request, Model $reporteIncidente, array $attributes): void
    {
        $attributes['fecha_reporte'] = Carbon::createFromTimestampMs($attributes['fecha_reporte']);
        $reporteIncidente->fill($attributes);
        $reporteIncidente->save();
    }
}
