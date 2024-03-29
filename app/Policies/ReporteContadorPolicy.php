<?php

namespace App\Policies;

use App\Models\ReporteContador;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReporteContadorPolicy
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
        return $user->can('api:reporte_contador:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteContador  $reporteContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ReporteContador $reporteContador)
    {
        return $user->can('api:reporte_contador:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:reporte_contador:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteContador  $reporteContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ReporteContador $reporteContador)
    {
        return $user->can('api:reporte_contador:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteContador  $reporteContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ReporteContador $reporteContador)
    {
        return $user->can('api:reporte_contador:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteContador  $reporteContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ReporteContador $reporteContador)
    {
        return $user->can('api:reporte_contador:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteContador  $reporteContador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ReporteContador $reporteContador)
    {
        return $user->can('api:reporte_contador:eliminar');
    }
}
