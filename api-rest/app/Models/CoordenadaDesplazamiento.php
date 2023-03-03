<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoordenadaDesplazamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'coordenadas_desplazamiento';

    protected $fillable = [
        'desplazamiento_id',
        'id_medio_desplazamiento',
        'latitud',
        'longitud',
        'fecha_registro',
        'latitud',
        'velocidad'
    ];

    protected $dates = ['fecha_registro'];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
