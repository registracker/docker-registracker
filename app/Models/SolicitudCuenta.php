<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolicitudCuenta extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'solicitudes_cuentas';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    protected $fillable = ['id_usuario','id_estado_solicitud'];

    public function estado()
    {
        return $this->hasOne(EstadoSolicitud::class, 'id' ,'id_estado_solicitud');
    }
}
