<?php

namespace App\Http\Controllers\Api;

use App\Models\LevantamientoContador;
use Carbon\Carbon;
use Database\Seeders\Constant;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LevantamientoContadorController extends Controller
{
    protected $model = LevantamientoContador::class;

    public function includes(): array
    {
        return ['usuario'];
    }

    protected function keyName(): string
    {
        return 'codigo';
    }

    protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        $query = parent::buildIndexFetchQuery($request, $requestedRelations);

        if (!$this->resolveUser()->hasAnyRole([Constant::ROL_ADMINISTRADOR, Constant::ROL_INVESTIGADOR])) {
            $query->where('id_usuario', $this->resolveUser()->id);
        }

        if ($request->query('personal', 'no') == 'yes') {
            $email = $this->resolveUser()->email;
            $wildcardDomain = Str::of($email)->match('/(@.+)/')->prepend('*');
            $query
                ->whereDate('periodo_fin', '>=', Carbon::now())
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

    public function searchableBy(): array
    {
        return ['nombre_via', 'codigo'];
    }

    public function filterableBy(): array
    {
        return ['nombre_via'];
    }
}
