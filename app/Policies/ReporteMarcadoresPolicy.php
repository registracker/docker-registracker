<?php

namespace App\Policies;

use App\Models\ReporteMarcadores;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReporteMarcadoresPolicy
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
        return $user->can('api:reporte_marcadores:listar');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteMarcadores  $reporteMarcadoresSeed
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ReporteMarcadores $reporteMarcadoresSeed)
    {
        return $user->can('api:reporte_marcadores:listar');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('api:reporte_marcadores:crear');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteMarcadores  $reporteMarcadoresSeed
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ReporteMarcadores $reporteMarcadoresSeed)
    {
        return $user->can('api:reporte_marcadores:actualizar');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteMarcadores  $reporteMarcadoresSeed
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ReporteMarcadores $reporteMarcadoresSeed)
    {
        return $user->can('api:reporte_marcadores:eliminar');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteMarcadores  $reporteMarcadoresSeed
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ReporteMarcadores $reporteMarcadoresSeed)
    {
        return $user->can('api:reporte_marcadores:actualizar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ReporteMarcadores  $reporteMarcadoresSeed
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ReporteMarcadores $reporteMarcadoresSeed)
    {
        return $user->can('api:reporte_marcadores:eliminar');
    }
}
