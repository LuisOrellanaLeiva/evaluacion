<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Evaluador']);
        Role::create(['name' => 'Evaluado']);

        Permission::create(['name' => 'cargos.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'profiles.index'])->syncRoles([$role1]);
    }
}
