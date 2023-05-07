<?php

namespace App\Policies;

use App\Models\LevantamientoContador;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LevantamientoContadorPolicy
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
        return $user->can('api:levantamiento_contador:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LevantamientoContador  $levantamientoContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, LevantamientoContador $levantamientoContador)
    {
        return $user->can('api:levantamiento_contador:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:levantamiento_contador:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LevantamientoContador  $levantamientoContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, LevantamientoContador $levantamientoContador)
    {
        return $user->can('api:levantamiento_contador:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LevantamientoContador  $levantamientoContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, LevantamientoContador $levantamientoContador)
    {
        return $user->can('api:levantamiento_contador:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LevantamientoContador  $levantamientoContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, LevantamientoContador $levantamientoContador)
    {
        return $user->can('api:levantamiento_contador:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LevantamientoContador  $levantamientoContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, LevantamientoContador $levantamientoContador)
    {
        return $user->can('api:levantamiento_contador:eliminar');
    }
}
