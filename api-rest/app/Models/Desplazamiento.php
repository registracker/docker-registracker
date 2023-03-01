<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desplazamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'desplazamientos';

    protected $fillable = [
        'id',
        'incidentes_reportados',
        'distancia',
        'velocidad_max',
        'velocidad_media',
        'elevacion_min',
        'duracion',
        'inicio_desplazamiento',
        'fin_desplazamiento',
    ];

    protected $keyType = 'string';
    protected $casts = [
        'id' => 'string'
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
