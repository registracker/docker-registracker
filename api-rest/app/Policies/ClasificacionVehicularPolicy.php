<?php

namespace App\Policies;

use App\Models\ClasificacionVehicular;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClasificacionVehicularPolicy
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
        return $user->can('api:clasificacion_vehicular:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClasificacionVehicular  $clasificacionVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ClasificacionVehicular $clasificacionVehicular)
    {
        return $user->can('api:clasificacion_vehicular:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:clasificacion_vehicular:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClasificacionVehicular  $clasificacionVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ClasificacionVehicular $clasificacionVehicular)
    {
        return $user->can('api:clasificacion_vehicular:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClasificacionVehicular  $clasificacionVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ClasificacionVehicular $clasificacionVehicular)
    {
        return $user->can('api:clasificacion_vehicular:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClasificacionVehicular  $clasificacionVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ClasificacionVehicular $clasificacionVehicular)
    {
        return $user->can('api:clasificacion_vehicular:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClasificacionVehicular  $clasificacionVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ClasificacionVehicular $clasificacionVehicular)
    {
        return $user->can('api:clasificacion_vehicular:eliminar');
    }
}
