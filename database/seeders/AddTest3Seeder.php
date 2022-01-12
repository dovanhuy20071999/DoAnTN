<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTest3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert(array(
            array(
                'topic_id' => 1,
                'question' => ' The first graph shows the number of train passengers from 2000 to 2009; the second compares the percentage of trains running on time and target in the period.',
                'image_id' => 9,
            ),
        ));
    }
}
