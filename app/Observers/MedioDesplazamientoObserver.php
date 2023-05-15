<?php

namespace App\Observers;

use App\Models\BitacoraTabla;
use App\Models\MedioDesplazamiento;
use Carbon\Carbon;

class MedioDesplazamientoObserver
{
    /**
     * Handle the MedioDesplazamiento "created" event.
     *
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return void
     */
    public function created(MedioDesplazamiento $medioDesplazamiento)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'medios_desplazamiento'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the MedioDesplazamiento "updated" event.
     *
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return void
     */
    public function updated(MedioDesplazamiento $medioDesplazamiento)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'medios_desplazamiento'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the MedioDesplazamiento "deleted" event.
     *
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return void
     */
    public function deleted(MedioDesplazamiento $medioDesplazamiento)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'medios_desplazamiento'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the MedioDesplazamiento "restored" event.
     *
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return void
     */
    public function restored(MedioDesplazamiento $medioDesplazamiento)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'medios_desplazamiento'],
            ['actualizado' => new Carbon()]
        );
    }

    /**
     * Handle the MedioDesplazamiento "force deleted" event.
     *
     * @param  \App\Models\MedioDesplazamiento  $medioDesplazamiento
     * @return void
     */
    public function forceDeleted(MedioDesplazamiento $medioDesplazamiento)
    {
        BitacoraTabla::updateOrCreate(
            ['nombre_tabla' => 'medios_desplazamiento'],
            ['actualizado' => new Carbon()]
        );
    }
}
