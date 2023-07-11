<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'password' => 'admin_admin'
        ]);
        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user@user.com',
            'password' => 'user_user'
        ]);

        DB::table('roles')->insert([
            'name' => "admin",
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => "renter",
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name' => "role administrate",
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => "user administrate",
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => "permission administrate",
            'guard_name' => 'web',
        ]);
    }
}
