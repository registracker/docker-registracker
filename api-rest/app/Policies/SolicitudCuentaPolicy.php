<?php

namespace App\Policies;

use App\Models\SolicitudCuenta;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SolicitudCuentaPolicy
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
        return $user->can('api:solicitud_cuenta:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SolicitudCuenta  $solicitudCuenta
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SolicitudCuenta $solicitudCuenta)
    {
        return $user->can('api:solicitud_cuenta:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:solicitud_cuenta:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SolicitudCuenta  $solicitudCuenta
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SolicitudCuenta $solicitudCuenta)
    {
        return $user->can('api:solicitud_cuenta:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SolicitudCuenta  $solicitudCuenta
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SolicitudCuenta $solicitudCuenta)
    {
        return $user->can('api:solicitud_cuenta:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SolicitudCuenta  $solicitudCuenta
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, SolicitudCuenta $solicitudCuenta)
    {
        return $user->can('api:solicitud_cuenta:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SolicitudCuenta  $solicitudCuenta
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, SolicitudCuenta $solicitudCuenta)
    {
        //
    }
}
