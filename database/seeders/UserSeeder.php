<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'admin',
                'password' => Hash::make('123456'),
                'role_id' => 1,
            ],
        ]);
        // DB::table('users')->insert([
        //     [
        //         'id' => 1,
        //         'code' => 'admin',
        //         'fullname' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'phone' => '0867890890',
        //         'birth' => '2023-01-01',
        //         'gender' => '1',
        //         'address' => 'ha noi',
        //         'avatar' => 'Admin_Logo.png',
        //         'gpa' => '4.0',
        //         'status' => '1',
        //         'type' => '1',
        //         'major_id' => '1',
        //         'school_year_id' => '1',
        //     ],
        // ]);
    }
}
