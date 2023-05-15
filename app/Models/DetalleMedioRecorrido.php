<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalleMedioRecorrido extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'detalle_medios_recorrido';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
    
    protected $fillable = ['ruta'];

    protected $casts = [
        'duracion'  => 'date:H:i:s',
    ];

    public function medio_desplazamiento()
    {
        return $this->hasOne(MedioDesplazamiento::class, 'id','id_medio_desplazamiento')->withTrashed();
    }
}
