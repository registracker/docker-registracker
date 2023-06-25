<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionRequest;
use Database\Seeders\Constant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Arr;

class PermissionController extends Controller
{
    protected $model = Permission::class;

    protected $request = PermissionRequest::class;

    private $defaultPermisos = Constant::DEFAULT_PERMISSIONS;

    public function limit(): int
    {
        return 100;
    }

    public function filterableBy(): array
    {
        return ['id', 'name'];
    }
    public function sortableBy(): array
    {
        return ['id', 'name'];
    }

    protected function performUpdate(Request $request, Model $permission, array $attributes): void
    {
        if ($permission->id > $this->defaultPermisos) {
            $permission->fill(Arr::only($attributes, ['name']));
            $permission->save();
        }
    }

    protected function performDestroy(Model $permission): void
    {
        if ($permission->id > $this->defaultPermisos) {
            $permission->delete();
        }
    }
}
