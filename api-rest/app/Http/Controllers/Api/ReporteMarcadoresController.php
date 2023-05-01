<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ReporteMarcadoresRequest;
use App\Models\Levantamiento;
use App\Models\ReporteMarcadores;
use Orion\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
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
        $data = collect($attributes)->only(['latitud', 'longitud', 'altitud', 'comentario', 'id_marcador'])->toArray();
        $reporteMarcador->fill(array_merge($data, [
            'id_usuario' => $this->resolveUser()->id,
            'id_levantamiento' => Levantamiento::where('codigo', $attributes['codigo'])->first()->id,
        ]));
        $reporteMarcador->save();
    }
}
