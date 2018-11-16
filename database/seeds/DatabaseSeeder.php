<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        DB::table('semesters')->insert([
            [
                'semName' => '1st',
                  'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'semName' => '2nd',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'semName' => '3rd',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'semName' => '4th',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()


            ],
            [
                'semName' => '5th',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'semName' => '6th',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()


            ],
            [
                'semName' => '7th',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()


            ],
            [
                'semName' => '8th',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()


            ]
        ]);
    }
}
