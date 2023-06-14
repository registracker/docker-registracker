<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class AgrupacionLevantamiento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['email', 'levantamiento_type', 'levantamiento_id'];

    protected $table = 'agrupacion_levantamiento';

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower($value),
            set: function (string $value) {
                $regex = '/^(\*(@[a-zA-Z0-9_.]+)?|[a-zA-Z0-9_@.]+)$/';
                if (preg_match($regex, $value)) {
                    return strtolower($value);
                } else {
                    return null;
                }
            }
        );
    }
}
