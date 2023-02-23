<?php

namespace App\Policies;

use App\Models\EstadoSolicitud;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstadoSolicitudPolicy
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
        return $user->can('api:estado_solicitud:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstadoSolicitud  $estadoSolicitud
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, EstadoSolicitud $estadoSolicitud)
    {
        return $user->can('api:estado_solicitud:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:estado_solicitud:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstadoSolicitud  $estadoSolicitud
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, EstadoSolicitud $estadoSolicitud)
    {
        return $user->can('api:estado_solicitud:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstadoSolicitud  $estadoSolicitud
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, EstadoSolicitud $estadoSolicitud)
    {
        return $user->can('api:estado_solicitud:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstadoSolicitud  $estadoSolicitud
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, EstadoSolicitud $estadoSolicitud)
    {
        return $user->can('api:estado_solicitud:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EstadoSolicitud  $estadoSolicitud
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, EstadoSolicitud $estadoSolicitud)
    {
        return $user->can('api:estado_solicitud:elliminar');
    }
}
