<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClaseVehicular extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clases_vehicular';

    protected $fillable = [
        'id',
        'id_clasificacion_vehicular',
        'nombre',
        'descripcion',
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'id_clase')->withTrashed();
    }
}
