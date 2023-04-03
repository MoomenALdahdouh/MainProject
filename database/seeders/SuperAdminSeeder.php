<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Admin::factory()->count(1)->create()->each(
            function ($superAdmin){
                $superAdmin->assignRole('Super Admin');
            }
        );
    }
}
