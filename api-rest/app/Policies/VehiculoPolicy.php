<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Auth\Access\HandlesAuthorization;

class VehiculoPolicy
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
        return $user->can('api:vehiculo:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Vehiculo $vehiculo)
    {
        return $user->can('api:vehiculo:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:vehiculo:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Vehiculo $vehiculo)
    {
        return $user->can('api:vehiculo:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Vehiculo $vehiculo)
    {
        return $user->can('api:vehiculo:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Vehiculo $vehiculo)
    {
        return $user->can('api:vehiculo:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Vehiculo $vehiculo)
    {
        return $user->can('api:vehiculo:eliminar');
    }
}
