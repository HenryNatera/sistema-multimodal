<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Master']);
        $role2 = Role::create(['name' => 'Acreditable']);
        $role3 = Role::create(['name' => 'Estudiante']);
        $role4 = Role::create(['name' => 'Profesor']);
        $role5 = Role::create(['name' => 'Coordinador']);
        $role6 = Role::create(['name' => 'Docencia']);
        $role7 = Role::create(['name' => 'Academica']);

        //MASTER
        Permission::create(['name' => 'master.test'])->syncRoles([$role1]);

        //HOME

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        //ACREDITABLE
        Permission::create(['name' => 'acreditables.show'])->syncRoles([$role1, $role2]);

        //ESTUDIANTE
        Permission::create(['name' => 'student.asignaturas.show'])->syncRoles([$role1, $role3]);

        //PROFESOR
        Permission::create(['name' => 'professor.asignaturas.resumen'])->syncRoles([$role1, $role4]);

        //COORDINADOR
        Permission::create(['name' => 'pnf.malla'])->syncRoles([$role1, $role5]);

        //DOCENCIA
        Permission::create(['name' => 'docencia.profesores.show'])->syncRoles([$role1, $role6]);

        //ACADEMICA
        Permission::create(['name' => 'academica.profesores.show'])->syncRoles([$role1, $role7]);

    }
}
