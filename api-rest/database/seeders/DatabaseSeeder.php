<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ClasificacionVehicular;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ZonaSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            GeneroSeeder::class,
            UniversidadSeeder::class,
            RolPermissionSeeder::class,
            IncidenteSeeder::class,
            MarcadorSeeder::class,
            MedioDesplazamientoSeeder::class,
            EstadoSolicitudSeeder::class,
            /**
             * UserSeeder debe ir luego de RolPermissionSeeder
             * EstadoCuentaSeeder debe ir luego de UserSeeder
             */
            UserSeeder::class,
            EstadoCuentaSeeder::class,
            RutasTransporteSeeder::class,
            LevantamientosSeeder::class,
            ReporteMarcadoresSeeder::class,

            /**
             * Conteo Vehicular
             */
            ClasificacionVehicularSeeder::class,
            VehiculoSeeder::class,
            LevantamientoContadorSeeder::class,
            ReporteContadorSeeder::class,
        ]);
    }
}
