<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zona extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'zonas';

    protected $fillable = ['nombre', 'id', 'fecha_creado'];

    public $timestamps = true;

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';
    const DELETED_AT = 'fecha_eliminado';

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'id_zona');
    }
}
