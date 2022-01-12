<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deadlines')->insert(array(
            array(
                'deadline_name' => '4 hours',
                'deadline_price' => 800000,
            ),
            array(
                'deadline_name' => '8 hours',
                'deadline_price' => 60000,
            ),
            array(
                'deadline_name' => '12 hours',
                'deadline_price' => 40000,
            ),
            array(
                'deadline_name' => '24 hours',
                'deadline_price' => 20000,
            ),
            array(
                'deadline_name' => '48 hours',
                'deadline_price' => 10000,
            ),
        ));
    }
}
