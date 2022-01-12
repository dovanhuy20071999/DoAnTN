<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCriterion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterions')->insert(array(
            array(
                'name' => 'Task Fulfillment',
            ),
            array(
                'name' => 'Organizition',
            ),
            array(
                'name' => 'Vocabulary',
            ),
            array(
                'name' => 'Grammar',
            ),
        )); 
    }
}
