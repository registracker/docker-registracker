<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgrupacionLevantamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['email', 'levantamiento_type', 'levantamiento_id'];

    protected $table = 'agrupacion_levantamiento';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';
}
