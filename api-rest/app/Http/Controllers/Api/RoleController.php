<?php

namespace App\Http\Controllers\Api;

use Spatie\Permission\Models\Role;
use Orion\Http\Controllers\Controller;

class RoleController extends Controller
{
    protected $model = Role::class;

    public function includes(): array
    {
        return ['permissions', 'users'];
    }
}
