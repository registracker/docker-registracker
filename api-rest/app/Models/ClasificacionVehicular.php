<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClasificacionVehicular extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clasificaciones_vehicular';

    protected $fillable = [
        'id',
        'nombre',
        'version',
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function clases()
    {
        return $this->hasMany(ClaseVehicular::class, 'id_clasificacion_vehicular');
    }
}
