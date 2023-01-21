<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create data']);
        Permission::create(['name' => 'read data']);
        Permission::create(['name' => 'update data']);
        Permission::create(['name' => 'delete data']);
        Permission::create(['name' => 'destroy data']);

        // create roles and assign created permissions

        // user
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['create data', 'read data']);

        // supervisor
        $role = Role::create(['name' => 'supervisor'])
            ->givePermissionTo(['create data', 'read data', 'update data']);

        // manager
        $role = Role::create(['name' => 'manager'])
            ->givePermissionTo(['create data', 'read data', 'update data', 'delete data']);

        // super admin
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
