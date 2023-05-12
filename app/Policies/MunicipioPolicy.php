<?php

namespace App\Policies;

use App\Models\Municipio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MunicipioPolicy
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
        return $user->can('api:municipio:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Municipio $municipio)
    {
        return $user->can('api:municipio:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:municipio:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Municipio $municipio)
    {
        return $user->can('api:municipio:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Municipio $municipio)
    {
        return $user->can('api:municipio:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Municipio $municipio)
    {
        return $user->can('api:municipio:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Municipio $municipio)
    {
        return $user->can('api:municipio:eliminar');
    }
}
