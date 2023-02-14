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

        $accionesDisponibles = collect(['listar', 'crear', 'actualizar', 'eliminar']);
        $tablas = collect(['zona', 'departamento', 'municipio', 'genero', 'universidad', 'rol', 'incidente', 'marcador', 'medio_desplazamiento', 'permiso']);

        $sitios = collect([
            'administracion:usuarios',
            'administracion:roles',
            'administracion:permisos',
            'administracion:medios_desplazamiento',
            'administracion:incidentes',
            'administracion:marcadores'
        ]);

        $roleAdministrador = Role::create(['name' => Constant::ROL_ADMINISTRADOR]);
        $roleParticipante = Role::create(['name' => Constant::ROL_PARTICIPANTE]);
        $roleInvestigador = Role::create(['name' => Constant::ROL_INVESTIGADOR]);

        foreach ($sitios as $sitio) {
            $permission = Permission::create(['name' => $guardWeb . $separador . $sitio, 'guard_name' => 'web']);
            $roleAdministrador->givePermissionTo($permission);
        }

        foreach ($tablas as $tbl) {
            foreach ($accionesDisponibles as $accion) {
                $permission = Permission::create(['name' => $guardApi . $separador . $tbl . $separador . $accion, 'guard_name' => 'web']);

                $roleAdministrador->givePermissionTo($permission);

                if (in_array($accion, ['listar', 'crear'])) {
                    $roleParticipante->givePermissionTo($permission);
                    $roleInvestigador->givePermissionTo($permission);
                }
            }
        }
    }
}
