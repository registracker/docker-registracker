<?php

namespace App\Observers;

use App\Models\BitacoraTabla;
use App\Models\Marcador;
use Carbon\Carbon;

class MarcadorObserver
{
    /**
     * Handle the Marcador "created" event.
     *
     * @param  \App\Models\Marcador  $marcador
     * @return void
     */
    public function created(Marcador $marcador)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'marcadores'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Marcador "updated" event.
     *
     * @param  \App\Models\Marcador  $marcador
     * @return void
     */
    public function updated(Marcador $marcador)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'marcadores'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Marcador "deleted" event.
     *
     * @param  \App\Models\Marcador  $marcador
     * @return void
     */
    public function deleted(Marcador $marcador)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'marcadores'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Marcador "restored" event.
     *
     * @param  \App\Models\Marcador  $marcador
     * @return void
     */
    public function restored(Marcador $marcador)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'marcadores'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the Marcador "force deleted" event.
     *
     * @param  \App\Models\Marcador  $marcador
     * @return void
     */
    public function forceDeleted(Marcador $marcador)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'marcadores'],
            ['actualizado' => new Carbon()]
        );
    }
}
