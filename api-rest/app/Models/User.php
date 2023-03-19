<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNombreRoles()
    {
        return $this->getRoleNames()->first();
    }

    public function getPermisos()
    {
        return $this->getAllPermissions()->pluck('name')->toArray();
    }

    public function solicitud()
    {
        return $this->hasOne(SolicitudCuenta::class, 'id_usuario');
    }

    public function rol()
    {
        return $this->getRoleNames();
    }

    public function getPermisosWeb()
    {
        return $this->getAllPermissions()->filter(function ($value) {
            return Str::startsWith($value['name'], 'web:');
        })->pluck('name')->toArray();
    }
}
