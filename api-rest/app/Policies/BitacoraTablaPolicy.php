<?php

namespace App\Policies;

use App\Models\BitacoraTabla;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BitacoraTablaPolicy
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
        return $user->can('api:bitacora_tablas:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BitacoraTabla  $bitacoraTabla
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, BitacoraTabla $bitacoraTabla)
    {
        return $user->can('api:bitacora_tablas:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:bitacora_tablas:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BitacoraTabla  $bitacoraTabla
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, BitacoraTabla $bitacoraTabla)
    {
        return $user->can('api:bitacora_tablas:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BitacoraTabla  $bitacoraTabla
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, BitacoraTabla $bitacoraTabla)
    {
        return $user->can('api:bitacora_tablas:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BitacoraTabla  $bitacoraTabla
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, BitacoraTabla $bitacoraTabla)
    {
        return $user->can('api:bitacora_tablas:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BitacoraTabla  $bitacoraTabla
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, BitacoraTabla $bitacoraTabla)
    {
        return $user->can('api:bitacora_tablas:eliminar');
    }
}
