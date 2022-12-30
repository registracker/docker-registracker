<?php

namespace App\Http\Controllers\Api;

use App\Models\Zona;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class ZonaController extends Controller
{
    use DisableAuthorization;

    protected $model = Zona::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }

    /**
    * The relations that are allowed to be included together with a resource.
    *
    * @return array
    */
    public function includes() : array
    {
        return ['departamentos'];
    }

    // /**
    // * The relations that are loaded by default together with a resource.
    // *
    // * @return array
    // */
    // public function alwaysIncludes() : array
    // {
    //     return ['departamentos'];
    // }
}
