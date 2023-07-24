<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dev = Role::create([
            "slug" => "developer",
            "name" => "Developer"
        ]);
        
        $admin = Role::create([
            "slug" => "administrator",
            "name" => "Administrator"
        ]);

        $powerUser = Role::create([
            "slug" => "power-user",
            "name" => "Power User"
        ]);

        $user = Role::create([
            "slug" => "user",
            "name" => "User"
        ]);
    }
}
