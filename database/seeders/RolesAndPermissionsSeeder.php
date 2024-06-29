<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'edit permission']);
        Permission::create(['name' => 'delete permission']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Just Admin']);
        $role1->givePermissionTo('edit user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('edit role');
        $role1->givePermissionTo('delete role');
        $role1->givePermissionTo('edit permission');
        $role1->givePermissionTo('delete permission');

        $role2 = Role::create(['name' => 'Instructor']);
        $role2->givePermissionTo('edit user');

        // gets all permissions via Gate::before rule; see AppServiceProvider
        $role3 = Role::create(['name' => 'Super Admin']);

        $role4 = Role::create(['name' => 'Student']);

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Just Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Just Instructor',
            'email' => 'ins@app.com',
            'password' => Hash::make('ins'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'sadmin@app.com',
            'password' => Hash::make('super'),
        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Just Student',
            'email' => 'student@app.com',
            'password' => Hash::make('student'),
        ]);
        $user->assignRole($role4);
    }
}
