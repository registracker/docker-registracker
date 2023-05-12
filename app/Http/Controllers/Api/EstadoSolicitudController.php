<?php

namespace App\Http\Controllers\Api;

use App\Models\EstadoSolicitud;
use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoSolicitudController extends Controller
{
    protected $model = EstadoSolicitud::class;
}
