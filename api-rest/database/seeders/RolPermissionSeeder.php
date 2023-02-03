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

        $accionesDisponibles = collect(['listar', 'crear', 'actualizar', 'eliminar']);
        $tablas = collect(['zona', 'departamento', 'municipio', 'genero', 'universidad', 'rol', 'incidente', 'marcador', 'medio_desplazamiento']);

        $roleAdministrador = Role::create(['name' => Constant::ROL_ADMINISTRADOR]);
        $roleParticipante = Role::create(['name' => Constant::ROL_PARTICIPANTE]);
        $roleInvestigador = Role::create(['name' => Constant::ROL_INVESTIGADOR]);

        foreach ($tablas as $tbl) {
            foreach ($accionesDisponibles as $accion) {
                $permission = Permission::create(['name' => $tbl . $separador . $accion, 'guard_name' => 'web']);

                $roleAdministrador->givePermissionTo($permission);
                if (in_array($accion, ['listar', 'crear'])) {
                    $roleParticipante->givePermissionTo($permission);
                    $roleInvestigador->givePermissionTo($permission);
                }
            }
        }
    }
}
