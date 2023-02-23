<?php

namespace App\Policies;

use App\Models\ClaseVehicular;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClaseVehicularPolicy
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
        return $user->can('api:clase_vehicular:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClaseVehicular  $ClaseVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ClaseVehicular $ClaseVehicular)
    {
        return $user->can('api:clase_vehicular:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:clase_vehicular:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClaseVehicular  $ClaseVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ClaseVehicular $ClaseVehicular)
    {
        return $user->can('api:clase_vehicular:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClaseVehicular  $ClaseVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ClaseVehicular $ClaseVehicular)
    {
        return $user->can('api:clase_vehicular:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClaseVehicular  $ClaseVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ClaseVehicular $ClaseVehicular)
    {
        return $user->can('api:clase_vehicular:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClaseVehicular  $ClaseVehicular
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ClaseVehicular $ClaseVehicular)
    {
        return $user->can('api:clase_vehicular:eliminar');
    }
}
