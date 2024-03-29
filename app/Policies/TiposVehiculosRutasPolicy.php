<?php

namespace App\Policies;

use App\Models\TiposVehiculosRutas;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TiposVehiculosRutasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('api:tipos_vehiculos_rutas:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposVehiculosRutas  $tiposVehiculosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TiposVehiculosRutas $tiposVehiculosRutas)
    {
        return $user->can('api:tipos_vehiculos_rutas:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:tipos_vehiculos_rutas:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposVehiculosRutas  $tiposVehiculosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TiposVehiculosRutas $tiposVehiculosRutas)
    {
        return $user->can('api:tipos_vehiculos_rutas:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposVehiculosRutas  $tiposVehiculosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TiposVehiculosRutas $tiposVehiculosRutas)
    {
        return $user->can('api:tipos_vehiculos_rutas:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposVehiculosRutas  $tiposVehiculosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TiposVehiculosRutas $tiposVehiculosRutas)
    {
        return $user->can('api:tipos_vehiculos_rutas:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposVehiculosRutas  $tiposVehiculosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TiposVehiculosRutas $tiposVehiculosRutas)
    {
        return $user->can('api:tipos_vehiculos_rutas:eliminar');
    }
}
