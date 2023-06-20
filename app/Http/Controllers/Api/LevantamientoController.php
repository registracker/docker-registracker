<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Models\Levantamiento;
use Carbon\Carbon;
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
        return ['codigo', 'fecha_vencimiento', 'id'];
    }

    public function includes(): array
    {
        return ['usuario'];
    }

    public function searchableBy(): array
    {
        return ['codigo'];
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);
        if (
            !$this->resolveUser()->hasRole([Constant::ROL_ADMINISTRADOR, Constant::ROL_INVESTIGADOR])
            && !($request->query('personal', 'no') == 'yes')
        ) {
            $query->where('id_usuario', $this->resolveUser()->id);
        }

        if ($request->has('order_by')) {
            $orderBy = explode(',', $request->query('order_by'));
            $column = $orderBy[0];
            $direction = isset($orderBy[1]) ? $orderBy[1] : 'asc';
            $query->orderBy($column, $direction);
        }

        if ($request->query('personal', 'no') == 'yes') {
            $email = $this->resolveUser()->email;
            $wildcardDomain = Str::of($email)->match('/(@.+)/')->prepend('*');
            $query
                ->whereDate('fecha_vencimiento', '>=', Carbon::now())
                ->whereHas('agrupacion', function (Builder $query) use ($email, $wildcardDomain) {
                    $query
                        ->where('email', $email)
                        ->orWhere('email', $wildcardDomain);
                });
        }

        return $query->orderBy('id', 'desc');
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
