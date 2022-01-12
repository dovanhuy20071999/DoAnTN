<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(array(
            array(
                'level_id' => 2,
                'name' => 'Ielts writing task 1',
            ),
            array(
                'level_id' => 2,
                'name' => 'Ielts writing task 2',
            ),
        ));
    }
}
