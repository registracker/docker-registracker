<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use App\Models\Universidad;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class UniversidadController extends Controller
{
    use DisableAuthorization;

    protected $model = Universidad::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }

}
