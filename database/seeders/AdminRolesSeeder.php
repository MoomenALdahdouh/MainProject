<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::query()->firstOrCreate(['name' => 'Super Admin'], ['guard_name' => 'admin']);
        $permissions = Permission::query()->pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
    }
}
