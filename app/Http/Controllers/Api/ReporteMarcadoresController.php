<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ReporteMarcadoresRequest;
use App\Models\Levantamiento;
use App\Models\ReporteMarcadores;
use Orion\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Orion\Http\Requests\Request;

class ReporteMarcadoresController extends Controller
{
    protected $model = ReporteMarcadores::class;

    protected $request = ReporteMarcadoresRequest::class;

    public function includes(): array
    {
        return ['levantamiento'];
    }

    public function filterableBy(): array
    {
        return ['levantamiento.codigo'];
    }

    protected function performStore(Request $request, Model $reporteMarcador, array $attributes): void
    {
        // $data = collect($attributes)->only(['latitud', 'comentario', 'id_marcador'])->toArray();
        $longitud = number_format($attributes['longitud'], 6);
        $latitud = number_format($attributes['latitud'], 6);
        $attributes['altitud'] = number_format($attributes['altitud'], 6);
        $attributes['posicion'] = DB::raw("ST_SetSRID(ST_Point($longitud, $latitud), 4326)");
        $reporteMarcador->fill(array_merge($attributes, [
            'id_usuario' => $this->resolveUser()->id,
            'id_levantamiento' => Levantamiento::where('codigo', $attributes['codigo'])->first()->id,
        ]));
        $reporteMarcador->save();
    }
}
