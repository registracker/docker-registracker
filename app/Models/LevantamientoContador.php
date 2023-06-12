<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevantamientoContador extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'levantamiento_contador';

    protected $fillable = [
        'id_usuario',
        'codigo',
        'nombre_via',
        'identificacion_via',
        'categoria_via',
        'numero_carriles',
        'periodo_inicio',
        'periodo_fin',
    ];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function levantamiento()
    {
        return $this->hasMany(ReporteContador::class, 'id_levantamiento_contador');
    }

    public function agrupacion()
    {
        return $this->morphMany(AgrupacionLevantamiento::class, 'levantamiento');
    }
}
