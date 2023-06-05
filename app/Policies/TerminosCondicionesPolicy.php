<?php

namespace App\Policies;

use App\Models\TerminosCondiciones;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TerminosCondicionesPolicy
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
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TerminosCondiciones  $terminosCondiciones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TerminosCondiciones $terminosCondiciones)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // return $user->can('api:terminos_condiciones:crear');
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TerminosCondiciones  $terminosCondiciones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TerminosCondiciones $terminosCondiciones)
    {
        return $user->can('api:terminos_condiciones:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TerminosCondiciones  $terminosCondiciones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TerminosCondiciones $terminosCondiciones)
    {
        return $user->can('api:terminos_condiciones:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TerminosCondiciones  $terminosCondiciones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TerminosCondiciones $terminosCondiciones)
    {
        return $user->can('api:terminos_condiciones:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TerminosCondiciones  $terminosCondiciones
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TerminosCondiciones $terminosCondiciones)
    {
        return $user->can('api:terminos_condiciones:eliminar');
    }
}
