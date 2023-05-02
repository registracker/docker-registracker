<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BitacoraTabla extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nombre_tabla', 'actualizado'];

    protected $table = 'bitacora_tablas';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
