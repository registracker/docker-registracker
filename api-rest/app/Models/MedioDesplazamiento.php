<?php

namespace App\Models;

use App\Observers\MedioDesplazamientoObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedioDesplazamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medios_desplazamiento';

    protected $fillable = ['nombre', 'id', 'icono'];
    
    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
