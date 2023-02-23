<?php

namespace App\Policies;

use App\Models\MedioDesplazamiento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedioDesplazamientoPolicy
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
        return $user->can('api:medio_desplazamiento:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, MedioDesplazamiento $medioDesplazamiento)
    {
        return $user->can('api:medio_desplazamiento:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:medio_desplazamiento:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, MedioDesplazamiento $medioDesplazamiento)
    {
        return $user->can('api:medio_desplazamiento:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, MedioDesplazamiento $medioDesplazamiento)
    {
        return $user->can('api:medio_desplazamiento:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, MedioDesplazamiento $medioDesplazamiento)
    {
        return $user->can('api:medio_desplazamiento:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, MedioDesplazamiento $medioDesplazamiento)
    {
        return $user->can('api:medio_desplazamiento:eliminar');
    }
}
