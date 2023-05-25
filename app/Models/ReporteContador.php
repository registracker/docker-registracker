<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReporteContador extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reporte_contador';

    protected $fillable = ['id_levantamiento_contador', 'id_vehiculo', 'registrado'];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
    
    protected $dates = ['registrado'];

    public function levantamiento()
    {
        return $this->belongsTo(LevantamientoContador::class, 'id_levantamiento_contador')->withTrashed();
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'id_vehiculo')->withTrashed();
    }
}
