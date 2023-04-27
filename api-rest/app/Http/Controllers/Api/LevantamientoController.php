<?php

namespace App\Http\Controllers\Api;

use App\Models\Levantamiento;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LevantamientoController extends Controller
{
    protected $model = Levantamiento::class;
    /**
     * The name of the field used to fetch a resource from the database.
     *
     * @return string
     */
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

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['usuario'];
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
