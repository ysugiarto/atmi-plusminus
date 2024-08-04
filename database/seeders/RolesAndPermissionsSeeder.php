<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

         // gets all permissions via Gate::before rule; see AppServiceProvider
         $role3 = Role::create(['name' => 'Super Admin']);

        // create permissions
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'edit permission']);
        Permission::create(['name' => 'delete permission']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Admin']);
        $role1->givePermissionTo('edit user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('edit role');
        $role1->givePermissionTo('delete role');
        $role1->givePermissionTo('edit permission');
        $role1->givePermissionTo('delete permission');

        $role2 = Role::create(['name' => 'Instructor']);
        $role2->givePermissionTo('edit user');

        $role4 = Role::create(['name' => 'Student']);

        $role5 = Role::create(['name' => 'Normal User']);
    }
}
