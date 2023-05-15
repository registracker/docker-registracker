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
        ]);

        $sitios = collect([
            'administracion:usuarios',
            'administracion:roles',
            'administracion:permisos',
            'administracion:medios-desplazamiento',
            'administracion:incidentes',
            'administracion:marcadores',
            'administracion:estados-solicitud',
            'administracion:clases-vehiculares',
            'administracion:vehiculos',
            'administracion:tipos-vehiculos-rutas',
            'administracion:tipos-servicios-rutas',
            'administracion:clases-servicios-rutas',
            'administracion:rutas-transporte',
            'administracion:levantamiento',
            'administracion:conteo-vehicular',
            
            'desplazamiento:movil',
            'desplazamiento:detalle',
            'levantamiento:marcador',
            'levantamiento:detalle-marcador',
            'levantamiento:levantamiento-contador',
            'conteo-vehicular:lista',
            'conteo-vehicular:detalle',
        ]);

        $roleAdministrador = Role::create(['name' => Constant::ROL_ADMINISTRADOR]);
        $roleParticipante = Role::create(['name' => Constant::ROL_PARTICIPANTE]);
        $roleInvestigador = Role::create(['name' => Constant::ROL_INVESTIGADOR]);

        foreach ($sitios as $sitio) {
            $permission = Permission::create(['name' => $guardWeb . $separador . $sitio, 'guard_name' => 'web']);
            $roleAdministrador->givePermissionTo($permission);
        }

        foreach ($modelos as $modelo) {
            foreach ($accionesDisponibles as $accion) {
                $permission = Permission::create(['name' => $guardApi . $separador . $modelo . $separador . $accion, 'guard_name' => 'web']);

                $roleAdministrador->givePermissionTo($permission);

                if (in_array($accion, ['listar', 'crear'])) {
                    $roleParticipante->givePermissionTo($permission);
                    $roleInvestigador->givePermissionTo($permission);
                }
            }
        }

        $roleInvestigador->givePermissionTo($guardWeb . ":desplazamiento:movil");
        $roleInvestigador->givePermissionTo($guardWeb . ":desplazamiento:detalle");
    }
}