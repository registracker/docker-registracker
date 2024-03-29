<?php

namespace App\Policies;

use App\Models\Universidad;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UniversidadPolicy
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
        return $user->can('api:universidad:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Universidad $universidad)
    {
        return $user->can('api:universidad:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:universidad:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Universidad $universidad)
    {
        return $user->can('api:universidad:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Universidad $universidad)
    {
        return $user->can('api:universidad:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Universidad $universidad)
    {
        return $user->can('api:universidad:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Universidad $universidad)
    {
        return $user->can('api:universidad:eliminar');
    }
}
