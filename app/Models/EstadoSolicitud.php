<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoSolicitud extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'estados_solicitud';

    protected $fillable = [
        'id',
        'nombre',
        'permitir_acceso'
    ];

    protected $casts = [
        'permitir_acceso' => 'boolean'
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
