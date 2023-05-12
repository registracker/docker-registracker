<?php

namespace App\Policies;

use App\Models\ReporteIncidente;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReporteIncidentePolicy
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
        return $user->can('api:reporte_incidente:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteIncidente  $reporteIncidente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ReporteIncidente $reporteIncidente)
    {
        return $user->can('api:reporte_incidente:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:reporte_incidente:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteIncidente  $reporteIncidente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ReporteIncidente $reporteIncidente)
    {
        return $user->can('api:reporte_incidente:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteIncidente  $reporteIncidente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ReporteIncidente $reporteIncidente)
    {
        return $user->can('api:reporte_incidente:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteIncidente  $reporteIncidente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ReporteIncidente $reporteIncidente)
    {
        return $user->can('api:reporte_incidente:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteIncidente  $reporteIncidente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ReporteIncidente $reporteIncidente)
    {
        return $user->can('api:reporte_incidente:eliminar');
    }
}
