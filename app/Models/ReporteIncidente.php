<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReporteIncidente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reportes_incidentes';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    protected $fillable = ['desplazamiento_id', 'id_incidente', 'fecha_reporte', 'latitud', 'longitud', 'altitud'];
}
