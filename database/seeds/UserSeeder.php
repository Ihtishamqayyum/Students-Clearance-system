<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
            'name' => 'student',
            'email' => 'student@gmail.com',
            'userType' => 'student',
            'status' =>1,
            'password' => bcrypt('password'),
            ],
            [
                'name' => 'provost',
                'email' => 'provost@gmail.com',
                'userType' => 'provost',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'tranpsport',
                'email' => 'transport@gmail.com',
                'userType' => 'transport',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'librarian',
                'email' => 'librarian@gmail.com',
                'userType' => 'librarian',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'sports',
                'email' => 'sports@gmail.com',
                'userType' => 'sports',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'proctor',
                'email' => 'proctor@gmail.com',
                'userType' => 'proctor',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'hostel',
                'email' => 'hostel@gmail.com',
                'userType' => 'hostel',
                'status' =>1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'department',
                'email' => 'department@gmail.com',
                'userType' => 'departmental',
                'status' =>1,
                'password' => bcrypt('password'),
            ]



    ]);
    }
}
