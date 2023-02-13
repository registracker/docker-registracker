<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipio;
use Illuminate\Contracts\Database\Query\Builder;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

class MunicipioController extends Controller
{
    protected $model = Municipio::class;
}
