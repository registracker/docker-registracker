<?php

namespace App\Observers;

use App\Models\BitacoraTabla;
use App\Models\Vehiculo;
use Carbon\Carbon;

class VehiculoObserver
{
    /**
     * Handle the Vehiculo "created" event.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return void
     */
    public function created(Vehiculo $vehiculo)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'vehiculos'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Vehiculo "updated" event.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return void
     */
    public function updated(Vehiculo $vehiculo)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'vehiculos'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Vehiculo "deleted" event.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return void
     */
    public function deleted(Vehiculo $vehiculo)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'vehiculos'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Vehiculo "restored" event.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return void
     */
    public function restored(Vehiculo $vehiculo)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'vehiculos'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Vehiculo "force deleted" event.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return void
     */
    public function forceDeleted(Vehiculo $vehiculo)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'vehiculos'],
            ['actualizado' => new Carbon()]
        );
    }
}
