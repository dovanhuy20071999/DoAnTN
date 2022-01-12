<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EssaySeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('essays')->insert(array(
            array(
                'user_id' => 2,
                'type_id' => 1,
                'status' => 0,
                'content' => 'This is content of question 1 ielt writing task 1'
            ),
            array(
                'user_id' => 2,
                'type_id' => 1,
                'status' => 1,
                'content' => 'Content of question 2 ielt writing task 1'
            ),
            array(
                'user_id' => 5,
                'type_id' => 2,
                'status' => 0,
                'content' => 'This is content of question 1 ielt writing task 2'
            ),
            array(
                'user_id' => 2,
                'type_id' => 2,
                'status' => 1,
                'content' => 'Content of question 2 ielt writing task 2'
            ),
            array(
                'user_id' => 5,
                'type_id' => 3,
                'status' => 0,
                'content' => 'This is content of normal'
            ),
        ));
    }
}
