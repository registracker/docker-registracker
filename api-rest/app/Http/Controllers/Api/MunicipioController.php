<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipio;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class MunicipioController extends Controller
{
    protected $model = Municipio::class;
}
