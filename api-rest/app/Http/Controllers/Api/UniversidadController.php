<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use App\Models\Universidad;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class UniversidadController extends Controller
{
    protected $model = Universidad::class;
}
