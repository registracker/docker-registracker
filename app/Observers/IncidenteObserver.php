<?php

namespace App\Observers;

use App\Models\BitacoraTabla;
use App\Models\Incidente;
use Carbon\Carbon;

class IncidenteObserver
{
    /**
     * Handle the Incidente "created" event.
     *
     * @param  \App\Models\Incidente  $incidente
     * @return void
     */
    public function created(Incidente $incidente)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'incidentes'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Incidente "updated" event.
     *
     * @param  \App\Models\Incidente  $incidente
     * @return void
     */
    public function updated(Incidente $incidente)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'incidentes'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Incidente "deleted" event.
     *
     * @param  \App\Models\Incidente  $incidente
     * @return void
     */
    public function deleted(Incidente $incidente)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'incidentes'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Incidente "restored" event.
     *
     * @param  \App\Models\Incidente  $incidente
     * @return void
     */
    public function restored(Incidente $incidente)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'incidentes'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Incidente "force deleted" event.
     *
     * @param  \App\Models\Incidente  $incidente
     * @return void
     */
    public function forceDeleted(Incidente $incidente)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'incidentes'],
            ['actualizado' => new Carbon()]
        );
    }
}
