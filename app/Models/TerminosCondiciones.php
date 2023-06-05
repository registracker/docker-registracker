<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TerminosCondiciones extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'terminos_condiciones';

    protected $fillable = ['descripcion', 'id'];

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
