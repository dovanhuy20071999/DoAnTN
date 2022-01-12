<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriterionSeeder extends Seeder
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
                'name' => 'Task respone',
            ),
            array(
                'name' => 'Cohenrence and Cohension',
            ),
            array(
                'name' => 'Lexical resource',
            ),
            array(
                'name' => 'Grammatical range and accuracy',
            ),
            array(
                'name' => 'General',
            ),
        ));
    }
}
