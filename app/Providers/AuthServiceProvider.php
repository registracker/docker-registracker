<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Zona;
use App\Policies\ZonaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
        'Spatie\Permission\Models\Permission' => 'App\Policies\PermissionPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        // Zona::class => ZonaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        // DUI en la tabla temporal cuando existe
    }
}
