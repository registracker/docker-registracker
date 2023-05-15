<?php

namespace App\Providers;

use App\Models\Incidente;
use App\Models\Marcador;
use App\Models\MedioDesplazamiento;
use App\Models\Vehiculo;
use App\Observers\IncidenteObserver;
use App\Observers\MarcadorObserver;
use App\Observers\MedioDesplazamientoObserver;
use App\Observers\VehiculoObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        MedioDesplazamiento::observe(MedioDesplazamientoObserver::class);
        Marcador::observe(MarcadorObserver::class);
        Incidente::observe(IncidenteObserver::class);
        Vehiculo::observe(VehiculoObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
