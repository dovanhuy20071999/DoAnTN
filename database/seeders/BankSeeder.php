<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_card')->insert(array(
            array(
                'user_id' => 1,
                'bank_name' => "Agribank",
                'money' => 5000000,
            ),
            array(
                'user_id' => 2,
                'bank_name' => "Vietcombank",
                'money' => 4000000,
            ),
            array(
                'user_id' => 5,
                'bank_name' => "Agribank",
                'money' => 6000000,
            ),
            array(
                'user_id' => 8,
                'bank_name' => "Viettinbank",
                'money' => 7000000,
            ),
            array(
                'user_id' => 14,
                'bank_name' => "Viettinbank",
                'money' => 7500000,
            ),
        ));
    }
}
