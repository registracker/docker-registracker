<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    protected $model = Permission::class;
    public function limit(): int
    {
        return 100;
    }

    public function filterableBy(): array
    {
        return ['name'];
    }
}
