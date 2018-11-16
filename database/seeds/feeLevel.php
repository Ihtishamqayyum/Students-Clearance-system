<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class feeLevel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fee_types')->insert([
            [
                'FeeType' => 'Semester',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'FeeType' => 'Transport',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ],
            [
                'FeeType' => 'Hostel',
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()

            ]

        ]);
    }
}
