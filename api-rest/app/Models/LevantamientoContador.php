<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevantamientoContador extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'levantamiento_contador';

    protected $fillable = ['id_usuario', 'codigo', 'punto_aforo', 'periodo_inicio', 'periodo_fin'];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
    
    protected $casts = [
        'periodo_inicio'  => 'date:d-m-Y',
        'periodo_fin'  => 'date:d-m-Y',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    
}
