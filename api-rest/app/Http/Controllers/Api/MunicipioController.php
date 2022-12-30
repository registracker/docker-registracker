<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipio;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class MunicipioController extends Controller
{
    use DisableAuthorization;

    protected $model = Municipio::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }
}
