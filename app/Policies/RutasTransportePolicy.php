<?php

namespace App\Policies;

use App\Models\RutasTransporte;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RutasTransportePolicy
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
        return $user->can('api:rutas_transportes:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RutasTransporte  $rutasTransporte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RutasTransporte $rutasTransporte)
    {
        return $user->can('api:rutas_transportes:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:rutas_transportes:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RutasTransporte  $rutasTransporte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RutasTransporte $rutasTransporte)
    {
        return $user->can('api:rutas_transportes:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RutasTransporte  $rutasTransporte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RutasTransporte $rutasTransporte)
    {
        return $user->can('api:rutas_transportes:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RutasTransporte  $rutasTransporte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RutasTransporte $rutasTransporte)
    {
        return $user->can('api:rutas_transportes:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RutasTransporte  $rutasTransporte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RutasTransporte $rutasTransporte)
    {
        return $user->can('api:rutas_transportes:eliminar');
    }
}
