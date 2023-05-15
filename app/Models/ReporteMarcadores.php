<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReporteMarcadores extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_usuario',
        'id_levantamiento',
        'id_marcador',
        'posicion',
        'altitud',
        'comentario',
        // 'latitud',
        // 'longitud',
    ];

    protected $table = 'reporte_marcadores';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function levantamiento()
    {
        return $this->belongsTo(Levantamiento::class, 'id_levantamiento');
    }

    public function marcador()
    {
        return $this->belongsTo(Marcador::class, 'id_marcador');
    }
}
