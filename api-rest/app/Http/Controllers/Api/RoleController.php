<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

class RoleController extends Controller
{
    protected $model = Role::class;

    public function includes(): array
    {
        return ['permissions', 'users'];
    }

    protected $attributes = ['id', 'title', 'published_at'];

    /**
     * Fills attributes on the given entity and stores it in database.
     *
     * @param Request $request
     * @param Model $rol
     * @param array $attributes
     */
    protected function performStore(Request $request, Model $rol, array $attributes): void
    {
        // if ($this->resolveUser()->hasRole('admin')) {
        //     $rol->forceFill($attributes);
        // } else {
        //     $rol->fill($attributes);
        // }
        $rol->save();
    }
}
