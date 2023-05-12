<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RutasTransporte extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_departamento',
        'id_tipo_vehiculo_ruta',
        'id_tipo_servicio_ruta',
        'id_clase_servicio_ruta',
        'codigo_ruta',
        'ruta',
        'denominacion',
        'tarifa_autorizada'
    ];

    protected $table = 'rutas_transportes';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento')->withTrashed();
    }

    public function vehiculo()
    {
        return $this->belongsTo(TiposVehiculosRutas::class, 'id_tipo_vehiculo_ruta')->withTrashed();
    }

    public function servicio()
    {
        return $this->belongsTo(TiposServiciosRutas::class, 'id_tipo_servicio_ruta')->withTrashed();
    }

    public function clase()
    {
        return $this->belongsTo(ClasesServiciosRutas::class, 'id_clase_servicio_ruta')->withTrashed();
    }
}
