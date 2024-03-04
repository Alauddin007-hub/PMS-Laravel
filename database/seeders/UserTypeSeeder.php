<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_types')->insert([
            'type' => "SuperAdmin",
        ]);
        DB::table('user_types')->insert([
            'type' => "Admin",
        ]);
        // DB::table('user_types')->insert([
        //     'type' => "Employee",
        // ]);
        DB::table('user_types')->insert([
            'type' => "Company",
        ]);
    }
}
