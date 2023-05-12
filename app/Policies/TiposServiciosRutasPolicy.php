<?php

namespace App\Policies;

use App\Models\TiposServiciosRutas;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TiposServiciosRutasPolicy
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
        return $user->can('api:tipos_servicios_rutas:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposServiciosRutas  $tiposServiciosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TiposServiciosRutas $tiposServiciosRutas)
    {
        return $user->can('api:tipos_servicios_rutas:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:tipos_servicios_rutas:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposServiciosRutas  $tiposServiciosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TiposServiciosRutas $tiposServiciosRutas)
    {
        return $user->can('api:tipos_servicios_rutas:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposServiciosRutas  $tiposServiciosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TiposServiciosRutas $tiposServiciosRutas)
    {
        return $user->can('api:tipos_servicios_rutas:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposServiciosRutas  $tiposServiciosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TiposServiciosRutas $tiposServiciosRutas)
    {
        return $user->can('api:tipos_servicios_rutas:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TiposServiciosRutas  $tiposServiciosRutas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TiposServiciosRutas $tiposServiciosRutas)
    {
        return $user->can('api:tipos_servicios_rutas:eliminar');
    }
}
