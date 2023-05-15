<?php

namespace App\Http\Controllers\Api;

use App\Models\ReporteIncidente;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReporteIncidenteController extends Controller
{
    protected $model = ReporteIncidente::class;

    protected function performStore(Request $request, Model $reporteIncidente, array $attributes): void
    {
        $attributes['fecha_reporte'] = Carbon::createFromTimestampMs($attributes['fecha_reporte']);
        $longitud = number_format($attributes['longitud'], 6);
        $latitud = number_format($attributes['latitud'], 6);
        $attributes['altitud'] = number_format($attributes['altitud'], 6);
        $attributes['posicion'] = DB::raw("ST_SetSRID(ST_Point($longitud, $latitud), 4326)");
        $reporteIncidente->fill($attributes);
        $reporteIncidente->save();
    }
}
