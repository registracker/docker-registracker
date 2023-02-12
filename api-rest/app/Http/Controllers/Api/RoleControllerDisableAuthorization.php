<?php

namespace App\Http\Controllers\Api;

use Orion\Concerns\DisableAuthorization;
use Spatie\Permission\Models\Role;
use Orion\Http\Controllers\Controller;

class RoleControllerDisableAuthorization extends Controller
{
    use DisableAuthorization;

    protected $model = Role::class;

    public function includes(): array
    {
        return ['permissions', 'users'];
    }
}
