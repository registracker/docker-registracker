<?php

namespace App\Policies;

use App\Models\DetalleMedioRecorrido;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DetalleMedioRecorridoPolicy
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
        return $user->can('api:detalle_medio_recorrido:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DetalleMedioRecorrido  $detalleMedioRecorrido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DetalleMedioRecorrido $detalleMedioRecorrido)
    {
        return $user->can('api:detalle_medio_recorrido:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:detalle_medio_recorrido:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DetalleMedioRecorrido  $detalleMedioRecorrido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DetalleMedioRecorrido $detalleMedioRecorrido)
    {
        return $user->can('api:detalle_medio_recorrido:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DetalleMedioRecorrido  $detalleMedioRecorrido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DetalleMedioRecorrido $detalleMedioRecorrido)
    {
        return $user->can('api:detalle_medio_recorrido:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DetalleMedioRecorrido  $detalleMedioRecorrido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DetalleMedioRecorrido $detalleMedioRecorrido)
    {
        return $user->can('api:detalle_medio_recorrido:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DetalleMedioRecorrido  $detalleMedioRecorrido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DetalleMedioRecorrido $detalleMedioRecorrido)
    {
        return $user->can('api:detalle_medio_recorrido:eliminar');
    }
}
