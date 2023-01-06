<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller as ControllersController;
use App\Models\Zona;
use App\Policies\ZonaPolicy;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class ZonaController extends Controller
{
    // use DisableAuthorization;
    // return [
    //     'index' => 'viewAny',
    //     'show' => 'view',
    //     'store' => 'create',
    //     'update' => 'update',
    //     'destroy' => 'delete',


    //     'create' => 'create',
    //     'edit' => 'update',
    // ];

    protected $model = Zona::class;

    /**
     * @var string $policy
     */
    // protected $policy = ZonaPolicy::class;

    /**
     * @var string $parentPolicy
     */
    // protected $parentPolicy = ZonaPolicy::class;

    // public function resolveUser()
    // {
    //     // return Auth::guard('sanctum')->user();
    //     return auth()->user();
    // }

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes(): array
    {
        return ['departamentos'];
    }

    /**
     * The relations that are loaded by default together with a resource.
     *
     * @return array
     */
    // public function alwaysIncludes() : array
    // {
    //     return ['departamentos'];
    // }
}
