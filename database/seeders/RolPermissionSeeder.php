<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;


class RolPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** 
         * 100 Administrador
         * 110 Administrador e investigador
         * 101 Administrador y usuario
         * 111 Administrador, investigador y participante
         */
        $modelos = collect([
            'api:zona:crear',
            'api:zona:listar',
            'api:zona:actualizar',
            'api:zona:eliminar',

            'api:departamento:crear',
            'api:departamento:listar',
            'api:departamento:actualizar',
            'api:departamento:eliminar',

            'api:municipio:crear',
            'api:municipio:listar',
            'api:municipio:actualizar',
            'api:municipio:eliminar',

            'api:genero:crear',
            'api:genero:listar',
            'api:genero:actualizar',
            'api:genero:eliminar',

            'api:universidad:crear',
            'api:universidad:listar',
            'api:universidad:actualizar',
            'api:universidad:eliminar',

            'api:rol:crear',
            'api:rol:listar',
            'api:rol:actualizar',
            'api:rol:eliminar',

            'api:incidente:crear',
            'api:incidente:listar',
            'api:incidente:actualizar',
            'api:incidente:eliminar',

            'api:marcador:crear',
            'api:marcador:listar',
            'api:marcador:actualizar',
            'api:marcador:eliminar',

            'api:medio_desplazamiento:crear',
            'api:medio_desplazamiento:listar',
            'api:medio_desplazamiento:actualizar',
            'api:medio_desplazamiento:eliminar',

            'api:permiso:crear',
            'api:permiso:listar',
            'api:permiso:actualizar',
            'api:permiso:eliminar',

            'api:vehiculo:crear',
            'api:vehiculo:listar',
            'api:vehiculo:actualizar',
            'api:vehiculo:eliminar',

            'api:estado_solicitud:crear',
            'api:estado_solicitud:listar',
            'api:estado_solicitud:actualizar',
            'api:estado_solicitud:eliminar',

            'api:user:crear',
            'api:user:listar',
            'api:user:actualizar',
            'api:user:eliminar',

            'api:desplazamiento:crear',
            'api:desplazamiento:listar',
            'api:desplazamiento:actualizar',
            'api:desplazamiento:eliminar',

            'api:solicitud_cuenta:crear',
            'api:solicitud_cuenta:listar',
            'api:solicitud_cuenta:actualizar',
            'api:solicitud_cuenta:eliminar',

            'api:reporte_incidente:crear',
            'api:reporte_incidente:listar',
            'api:reporte_incidente:actualizar',
            'api:reporte_incidente:eliminar',

            'api:detalle_medio_recorrido',
            'api:detalle_medio_recorrido',
            'api:detalle_medio_recorrido',
            'api:detalle_medio_recorrido',

            'api:tipos_vehiculos_rutas:crear',
            'api:tipos_vehiculos_rutas:listar',
            'api:tipos_vehiculos_rutas:actualizar',
            'api:tipos_vehiculos_rutas:eliminar',

            'api:tipos_servicios_rutas:crear',
            'api:tipos_servicios_rutas:listar',
            'api:tipos_servicios_rutas:actualizar',
            'api:tipos_servicios_rutas:eliminar',

            'api:clases_servicios_rutas:crear',
            'api:clases_servicios_rutas:listar',
            'api:clases_servicios_rutas:actualizar',
            'api:clases_servicios_rutas:eliminar',

            'api:rutas_transportes:crear',
            'api:rutas_transportes:listar',
            'api:rutas_transportes:actualizar',
            'api:rutas_transportes:eliminar',

            'api:levantamiento:crear',
            'api:levantamiento:listar',
            'api:levantamiento:actualizar',
            'api:levantamiento:eliminar',

            'api:reporte_marcadores:crear',
            'api:reporte_marcadores:listar',
            'api:reporte_marcadores:actualizar',
            'api:reporte_marcadores:eliminar',

            'api:bitacora_tablas:crear',
            'api:bitacora_tablas:listar',
            'api:bitacora_tablas:actualizar',
            'api:bitacora_tablas:eliminar',

            'api:levantamiento_contador:crear',
            'api:levantamiento_contador:listar',
            'api:levantamiento_contador:actualizar',
            'api:levantamiento_contador:eliminar',

            'api:reporte_contador:crear',
            'api:reporte_contador:listar',
            'api:reporte_contador:actualizar',
            'api:reporte_contador:eliminar',

            'api:terminos_condiciones:crear',
            'api:terminos_condiciones:listar',
            'api:terminos_condiciones:actualizar',
            'api:terminos_condiciones:eliminar',
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

        foreach ($sitios as $sitio) {
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

            $permission = Permission::create([
                'name' => $modelo,
                'guard_name' => 'web'
            ]);

            $roleAdministrador->givePermissionTo($permission);

            if (Str::startsWith($permission, '110')) {
                $roleInvestigador->givePermissionTo($permission);
            }

            if (Str::startsWith($permission, '111')) {
                $roleInvestigador->givePermissionTo($permission);
            }


            if (in_array($accion, ['listar', 'crear'])) {
                $roleParticipante->givePermissionTo($permission);
            }
        }
    }
}
