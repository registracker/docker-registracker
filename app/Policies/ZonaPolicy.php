<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Zona;
use Illuminate\Auth\Access\HandlesAuthorization;

class ZonaPolicy
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
        return $user->can('api:zona:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Zona $zona)
    {
        return $user->can('api:zona:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:zona:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Zona $zona)
    {
        return $user->can('api:zona:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Zona $zona)
    {
        return $user->can('api:zona:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Zona $zona)
    {
       return $user->can('api:zona:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Zona $zona)
    {
       return $user->can('api:zona:eliminar');
    }
}
