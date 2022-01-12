<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topic_writing')->insert(array(
            array(
                'name' => 'Education',
                'description' => 'Education topic exam question',
                'type_id' => 3
            ),
            array(
                'name' => 'Environment',
                'description' => 'Enviroment topic exam question',
                'type_id' => 3,
            ),
            array(
                'name' => 'Art',
                'description' => 'Art topic exam question',
                'type_id' => 3,
            ),
            array(
                'name' => 'Children',
                'description' => 'Children topic exam question',
                'type_id' => 3,
            ),
            array(
                'name' => 'Family',
                'description' => 'Family topic exam question',
                'type_id' => 3,
            ),
            
        ));
    }
}
