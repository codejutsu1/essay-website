<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Testing User',
            'email' => 'user@user.com',
            'password' => bcrypt('user@user'),
            'email_verified_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Testing Writer',
            'email' => 'writer@writer.com',
            'password' => bcrypt('writer@writer'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
