<?php

namespace App\Http\Controllers\Api;

use App\Models\Genero;
use Illuminate\Support\Facades\Auth;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class GeneroController extends Controller
{
    use DisableAuthorization;

    protected $model = Genero::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }
}
