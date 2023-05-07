<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vehiculos';

    protected $fillable = [
        'id_clasificacion_vehicular',
        'nombre',
        'nomenclatura',
        'descripcion',
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
