<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class AdminPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::query()->insertOrIgnore([
            /*Admin Roles Permissions*/
            [
                'name' => 'admin_roles',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_roles_create',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_roles_read',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_roles_write',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_roles_delete',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            /*Admin Users Permissions*/
            [
                'name' => 'admin_users',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_users_create',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_users_read',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_users_write',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'admin_users_delete',
                'guard_name'=> 'admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],

        ]);
    }
}
