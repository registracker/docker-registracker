<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $separador = Constant::SEPARADOR;
        $guardApi = Constant::GUARD_API;
        $guardWeb = Constant::GUARD_WEB;

        $accionesDisponibles = collect(['crear', 'listar', 'actualizar', 'eliminar']);

        $modelos = collect([
            'zona',
            'departamento',
            'municipio',
            'genero',
            'universidad',
            'rol',
            'incidente',
            'marcador',
            'medio_desplazamiento',
            'permiso',
            'vehiculo',
            'estado_solicitud',
            'user',
            'desplazamiento',
            'solicitud_cuenta',
            'reporte_incidente',
            'detalle_medio_recorrido',
            'tipos_vehiculos_rutas',
            'tipos_servicios_rutas',
            'clases_servicios_rutas',
            'rutas_transportes',
            'levantamiento',
            'reporte_marcadores',
            'bitacora_tablas',
            'levantamiento_contador',
            'reporte_contador',
            'terminos_condiciones',
        ]);

        $sitios = collect([
            'web:administracion:usuarios',
            'web:administracion:roles',
            'web:administracion:permisos',
            'web:administracion:medios-desplazamiento',
            'web:administracion:incidentes',
            'web:administracion:marcadores',
            'web:administracion:estados-solicitud',
            'web:administracion:clases-vehiculares',
            'web:administracion:vehiculos',
            'web:administracion:tipos-vehiculos-rutas',
            'web:administracion:tipos-servicios-rutas',
            'web:administracion:clases-servicios-rutas',
            'web:administracion:rutas-transporte',
            'web:administracion:levantamiento',
            'web:administracion:levantamiento-usuario',
            'web:administracion:conteo-vehicular',
            'web:administracion:conteo-vehicular-usuario',
            // Usuarios
            'web:desplazamiento:movil',
            'web:desplazamiento:detalle',
            'web:levantamiento:marcador',
            'web:levantamiento:detalle-marcador',
            'web:levantamiento:levantamiento-contador',
            'web:conteo-vehicular:lista',
            'web:conteo-vehicular:detalle',
            'web:desplazamiento:geojson',
        ]);

        $roleAdministrador = Role::create(['name' => Constant::ROL_ADMINISTRADOR]);
        $roleInvestigador = Role::create(['name' => Constant::ROL_INVESTIGADOR]);
        $roleParticipante = Role::create(['name' => Constant::ROL_PARTICIPANTE]);
        
        $sitiosInvestigador = [
            'web:desplazamiento:movil',
            'web:desplazamiento:detalle',
            'web:levantamiento:marcador',
            'web:levantamiento:detalle-marcador',
            'web:levantamiento:levantamiento-contador',
            'web:conteo-vehicular:lista',
            'web:web:conteo-vehicular:detalle',
            'web:desplazamiento:geojson',
            'web:administracion:levantamiento',
            'web:administracion:conteo-vehicular',
        ];

        $sitiosParticipante = [
            'web:desplazamiento:movil',
            'web:desplazamiento:detalle',
        ];

        foreach ($sitios as $sitio){
            $permission = Permission::create([
                'name' => $sitio,
                'guard_name' => 'web'
            ]);

            $roleAdministrador->givePermissionTo($permission);



            if (in_array($sitio, $sitiosInvestigador)) {
                $roleInvestigador->givePermissionTo($permission);
            }


            if (in_array($sitio, $sitiosParticipante)) {
                $roleParticipante->givePermissionTo($permission);
            }
        }

        foreach ($modelos as $modelo) {
            foreach ($accionesDisponibles as $accion) {
                $permission = Permission::create([
                    'name' => $guardApi . $separador . $modelo . $separador . $accion,
                    'guard_name' => 'web'
                ]);

                $roleAdministrador->givePermissionTo($permission);

                if (in_array($accion, ['listar', 'crear'])) {
                    $roleParticipante->givePermissionTo($permission);
                    $roleInvestigador->givePermissionTo($permission);
                }
            }
        }
    }
}
