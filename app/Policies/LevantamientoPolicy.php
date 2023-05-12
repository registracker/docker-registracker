<?php

namespace App\Policies;

use App\Models\Levantamiento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LevantamientoPolicy
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
        return $user->can('api:levantamiento:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Levantamiento  $levantamientos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Levantamiento $levantamiento)
    {
        return $user->can('api:levantamiento:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:levantamiento:listar');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Levantamiento  $levantamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Levantamiento $levantamiento)
    {
        return $user->can('api:levantamiento:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Levantamiento  $levantamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Levantamiento $levantamiento)
    {
        return $user->can('api:levantamiento:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Levantamiento  $levantamientos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Levantamiento $levantamiento)
    {
        return $user->can('api:levantamiento:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Levantamiento  $levantamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Levantamiento $levantamiento)
    {
        return $user->can('api:levantamiento:eliminar');
    }
}
