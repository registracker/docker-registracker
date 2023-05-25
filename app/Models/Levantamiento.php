<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Levantamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id_usuario', 'codigo', 'fecha_vencimiento'];

    protected $table = 'levantamientos';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
    
    protected $casts = [
        'fecha_vencimiento'  => 'date:d-m-Y',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario')->withTrashed();
    }
}
