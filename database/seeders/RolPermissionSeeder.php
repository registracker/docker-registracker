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
            // 'api:zona:crear',
            // 'api:zona:listar',
            // 'api:zona:actualizar',
            // 'api:zona:eliminar',

            // 'api:genero:crear',
            // 'api:genero:listar',
            // 'api:genero:actualizar',
            // 'api:genero:eliminar',

            // 'api:universidad:crear',
            // 'api:universidad:listar',
            // 'api:universidad:actualizar',
            // 'api:universidad:eliminar',

            // 'api:municipio:crear',
            // 'api:municipio:listar',
            // 'api:municipio:actualizar',
            // 'api:municipio:eliminar',

            '100:api:departamento:crear',
            '111:api:departamento:listar',
            '100:api:departamento:actualizar',
            '100:api:departamento:eliminar',

            '100:api:rol:crear',
            '100:api:rol:listar',
            '100:api:rol:actualizar',
            '100:api:rol:eliminar',

            '100:api:incidente:crear',
            '111:api:incidente:listar',
            '100:api:incidente:actualizar',
            '100:api:incidente:eliminar',

            '100:api:marcador:crear',
            '111:api:marcador:listar',
            '100:api:marcador:actualizar',
            '100:api:marcador:eliminar',

            '100:api:medio_desplazamiento:crear',
            '111:api:medio_desplazamiento:listar',
            '100:api:medio_desplazamiento:actualizar',
            '100:api:medio_desplazamiento:eliminar',

            '100:api:permiso:crear',
            '100:api:permiso:listar',
            '100:api:permiso:actualizar',
            '100:api:permiso:eliminar',

            '110:api:vehiculo:crear',
            '111:api:vehiculo:listar',
            '100:api:vehiculo:actualizar',
            '100:api:vehiculo:eliminar',

            '100:api:estado_solicitud:crear',
            '100:api:estado_solicitud:listar',
            '100:api:estado_solicitud:actualizar',
            '100:api:estado_solicitud:eliminar',

            '100:api:user:crear',
            '100:api:user:listar',
            '100:api:user:actualizar',
            '100:api:user:eliminar',

            '100:api:desplazamiento:crear',
            '111:api:desplazamiento:listar',
            '100:api:desplazamiento:actualizar',
            '100:api:desplazamiento:eliminar',

            '100:api:solicitud_cuenta:crear',
            '100:api:solicitud_cuenta:listar',
            '100:api:solicitud_cuenta:actualizar',
            '100:api:solicitud_cuenta:eliminar',

            '111:api:reporte_incidente:crear',
            '111:api:reporte_incidente:listar',
            '100:api:reporte_incidente:actualizar',
            '100:api:reporte_incidente:eliminar',

            '100:api:detalle_medio_recorrido:crear',
            '111:api:detalle_medio_recorrido:listar',
            '100:api:detalle_medio_recorrido:actualizar',
            '100:api:detalle_medio_recorrido:eliminar',

            '100:api:tipos_vehiculos_rutas:crear',
            '100:api:tipos_vehiculos_rutas:listar',
            '100:api:tipos_vehiculos_rutas:actualizar',
            '100:api:tipos_vehiculos_rutas:eliminar',

            '100:api:tipos_servicios_rutas:crear',
            '100:api:tipos_servicios_rutas:listar',
            '100:api:tipos_servicios_rutas:actualizar',
            '100:api:tipos_servicios_rutas:eliminar',

            '100:api:clases_servicios_rutas:crear',
            '100:api:clases_servicios_rutas:listar',
            '100:api:clases_servicios_rutas:actualizar',
            '100:api:clases_servicios_rutas:eliminar',

            '100:api:rutas_transportes:crear',
            '111:api:rutas_transportes:listar',
            '100:api:rutas_transportes:actualizar',
            '100:api:rutas_transportes:eliminar',

            '100:api:levantamiento:crear',
            '111:api:levantamiento:listar',
            '110:api:levantamiento:actualizar',
            '110:api:levantamiento:eliminar',

            '111:api:reporte_marcadores:crear',
            '111:api:reporte_marcadores:listar',
            '100:api:reporte_marcadores:actualizar',
            '100:api:reporte_marcadores:eliminar',

            '100:api:bitacora_tablas:crear',
            '111:api:bitacora_tablas:listar',
            '100:api:bitacora_tablas:actualizar',
            '100:api:bitacora_tablas:eliminar',

            '111:api:levantamiento_contador:crear',
            '111:api:levantamiento_contador:listar',
            '110:api:levantamiento_contador:actualizar',
            '110:api:levantamiento_contador:eliminar',

            '111:api:reporte_contador:crear',
            '111:api:reporte_contador:listar',
            '100:api:reporte_contador:actualizar',
            '100:api:reporte_contador:eliminar',

            '100:api:terminos_condiciones:crear',
            '100:api:terminos_condiciones:listar',
            '100:api:terminos_condiciones:actualizar',
            '100:api:terminos_condiciones:eliminar',
        ]);

        $sitios = collect([
            '100:web:administracion:usuarios',
            '100:web:administracion:roles',
            '100:web:administracion:permisos',
            '100:web:administracion:medios-desplazamiento',
            '100:web:administracion:incidentes',
            '100:web:administracion:marcadores',
            '100:web:administracion:estados-solicitud',
            '100:web:administracion:clases-vehiculares',
            '100:web:administracion:vehiculos',
            '100:web:administracion:tipos-vehiculos-rutas',
            '100:web:administracion:tipos-servicios-rutas',
            '100:web:administracion:clases-servicios-rutas',
            '100:web:administracion:rutas-transporte',
            '110:web:administracion:levantamiento',
            '110:web:administracion:levantamiento-usuario',
            '110:web:administracion:conteo-vehicular',
            '110:web:administracion:conteo-vehicular-usuario',
            '111:web:desplazamiento:movil',
            '111:web:desplazamiento:detalle',
            '110:web:reporte:marcador',
            '110:web:reporte:detalle-marcador',
            '110:web:levantamiento:levantamiento-contador',
            '110:web:reporte:conteo-vehicular',
            '110:web:reporte:detalle-conteo-vehicular',
            '110:web:desplazamiento:geojson',
            '110:web:reporte:incidente',
        ]);

        $roleAdministrador = Role::create(['name' => Constant::ROL_ADMINISTRADOR]);
        $roleInvestigador = Role::create(['name' => Constant::ROL_INVESTIGADOR]);
        $roleParticipante = Role::create(['name' => Constant::ROL_PARTICIPANTE]);

        foreach ($sitios as $sitio) {
            $permission = Permission::create([
                'name' => Str::substr($sitio, 4),
                'guard_name' => 'web'
            ]);

            $roleAdministrador->givePermissionTo($permission);

            if (Str::substr($sitio, 1, 1) == '1') {
                $roleInvestigador->givePermissionTo($permission);
            }

            if (Str::substr($sitio, 2, 1) == '1') {
                $roleParticipante->givePermissionTo($permission);
            }
        }

        foreach ($modelos as $modelo) {
            $permission = Permission::create([
                'name' => Str::substr($modelo, 4),
                'guard_name' => 'web'
            ]);

            $roleAdministrador->givePermissionTo($permission);

            if (Str::substr($modelo, 1, 1) == '1') {
                $roleInvestigador->givePermissionTo($permission);
            }

            if (Str::substr($modelo, 2, 1) == '1') {
                $roleParticipante->givePermissionTo($permission);
            }
        }
    }
}
