<?php

namespace App\Http\Controllers\Api;

use App\Models\BitacoraTabla;
use Orion\Http\Controllers\Controller;

class BitacoraTablaController extends Controller
{
    protected $model = BitacoraTabla::class;

    protected function keyName(): string
    {
        return 'nombre_tabla';
    }
}
