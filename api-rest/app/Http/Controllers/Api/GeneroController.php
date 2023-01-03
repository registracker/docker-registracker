<?php

namespace App\Http\Controllers\Api;

use App\Models\Genero;
use Illuminate\Support\Facades\Auth;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class GeneroController extends Controller
{
    protected $model = Genero::class;
}
