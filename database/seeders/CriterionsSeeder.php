<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriterionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterion')->insert(array(
            array(
                'level_id' => 2,
                'criterion_name' => 'Task respone'
            ),
            array(
                'level_id' => 2,
                'criterion_name' => 'Cohenrence and cohension'
            ),
            array(
                'level_id' => 2,
                'criterion_name' => 'Lexical resource'
            ),
            array(
                'level_id' => 2,
                'criterion_name' => 'Grammatical range and accuracy'
            ),
            array(
                'level_id' => 2,
                'criterion_name' => 'General'
            ),
            array(
                'level_id' => 1,
                'criterion_name' => 'Mark'
            ),
            array(
                'level_id' => 1,
                'criterion_name' => 'Essay correction'
            ),
            array(
                'level_id' => 1,
                'criterion_name' => 'Detail score'
            ),
            array(
                'level_id' => 1,
                'criterion_name' => 'Detailed instructions for writing essays'
            ),
        ));
    }
}
