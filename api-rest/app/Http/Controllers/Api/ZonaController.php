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
}
