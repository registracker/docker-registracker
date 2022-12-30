<?php

namespace App\Http\Controllers\Api;

use App\Models\Zona;
use Illuminate\Support\Facades\Auth;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\RelationController;

class ZonaDepartamentoController extends RelationController
{
    use DisableAuthorization;

    protected $model = Zona::class;

    protected $relation = 'departamentos';

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }
}
