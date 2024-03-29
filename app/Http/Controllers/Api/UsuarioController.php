<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Database\Eloquent\Builder;

class UsuarioController extends Controller
{
    protected $model = User::class;

    protected $request = UsuarioRequest::class;

    public function includes(): array
    {
        return ['solicitud.estado', 'solicitud', 'roles'];
    }

    public function filterableBy() : array
    {
        return ['id', 'roles.id'];
    }

    public function sortableBy() : array
    {
         return ['id'];
    }
    /**
     * Fills attributes on the given entity and update it in database.
     *
     * @param Request $request
     * @param Model $user
     * @param array $attributes
     */
    protected function performUpdate(Request $request, Model $user, array $attributes): void
    {
        if ($request->rol){
            $user->syncRoles([$request->rol]);
        }
        $user->fill(['password' => Hash::make($request->password),]);
        $user->save();
    }

    // protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    // {
    //     $query = parent::buildIndexFetchQuery($request, $requestedRelations);
    //     return $query->orderBy('id', 'desc');
    // }
}
