<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposServiciosRutas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['subtipo'];

    protected $table = 'tipos_servicios_rutas';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function rutas_transporte()
    {
        return $this->hasMany(RutasTransporte::class, 'id_tipo_servicio_ruta');
    }
}
