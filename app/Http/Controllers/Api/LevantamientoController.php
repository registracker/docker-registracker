<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Models\Levantamiento;
use Database\Seeders\Constant;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class LevantamientoController extends Controller
{
    protected $model = Levantamiento::class;

    protected function keyName(): string
    {
        return 'codigo';
    }

    public function limit(): int
    {
        return 100;
    }

    public function filterableBy(): array
    {
        return ['codigo', 'fecha_vencimiento'];
    }

    public function sortableBy(): array
    {
        return ['codigo', 'fecha_vencimiento'];
    }

    public function includes(): array
    {
        return ['usuario'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        if (!$this->resolveUser()->hasRole(Constant::ROL_ADMINISTRADOR)) {
            $query->where('id_usuario', $this->resolveUser()->id);
        }
        return $query;
    }

    protected function performStore(Request $request, Model $levantaminto, array $attributes): void
    {
        $levantaminto->fill(array_merge($attributes, [
            'id_usuario' => $this->resolveUser()->id,
            'codigo' => Str::substr(Str::ulid()->toRfc4122(), 9, -13)
        ]));
        $levantaminto->save();
    }
}
