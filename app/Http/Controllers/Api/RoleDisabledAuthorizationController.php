<?php

namespace App\Http\Controllers\Api;

use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class RoleDisabledAuthorizationController extends Controller
{
    use DisableAuthorization;

    protected $model = Role::class;

    public function includes(): array
    {
        return ['permissions', 'users'];
    }

}
