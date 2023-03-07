<?php

namespace App\Policies;

use App\Models\Desplazamiento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DesplazamientoPolicy
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
        return $user->can('api:desplazamiento:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Desplazamiento  $desplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Desplazamiento $desplazamiento)
    {
        return $user->can('api:desplazamiento:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:desplazamiento:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Desplazamiento  $desplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Desplazamiento $desplazamiento)
    {
        return $user->can('api:desplazamiento:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Desplazamiento  $desplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Desplazamiento $desplazamiento)
    {
        return $user->can('api:desplazamiento:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Desplazamiento  $desplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Desplazamiento $desplazamiento)
    {
        return $user->can('api:desplazamiento:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Desplazamiento  $desplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Desplazamiento $desplazamiento)
    {
        return $user->can('api:desplazamiento:eliminar');
    }
}
