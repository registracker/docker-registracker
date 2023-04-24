<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
             * Estas pueden hacerse una sola
             */
            ClasificacionVehicularSeeder::class,
            ClasesVehicularSeeder::class,
            VehiculoSeeder::class,
            /**
             * UserSeeder debe ir luego de RolPermissionSeeder
             * EstadoCuentaSeeder debe ir luego de UserSeeder
             */
            UserSeeder::class,
            EstadoCuentaSeeder::class,
            RutasTransporteSeeder::class,
        ]);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
