<?php

namespace App\Http\Controllers\Api;

use App\Models\TerminosCondiciones;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class TerminosCondicionesController extends Controller
{
    use DisableAuthorization;
    protected $model = TerminosCondiciones::class;
}
