<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
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
                'name' => 'Line Graph',
                'description' => 'Line graph topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Pie Chart',
                'description' => 'Pie Chart topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Bar Chart',
                'description' => 'Bar Chart topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Table',
                'description' => 'Table topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Mixed Chart',
                'description' => 'Mixed Chart topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Process',
                'description' => 'Process topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Maps',
                'description' => 'Maps topic exam questions',
                'type_id' => 1,
            ),
            array(
                'name' => 'Argumentative/Opinion/Agree or Disagree',
                'description' => 'Argumentative/Opinion/Agree or Disagree topic exam questions',
                'type_id' => 2,
            ),
            array(
                'name' => 'Discussion',
                'description' => 'Discussion topic exam questions',
                'type_id' => 2,
            ),
            array(
                'name' => 'Problem & Solution',
                'description' => 'Problem & Solution topic exam questions',
                'type_id' => 2,
            ),
            array(
                'name' => 'Advantage and Disadvantage',
                'description' => 'Advantage and Disadvantage topic exam questions',
                'type_id' => 2,
            ),
            array(
                'name' => 'Two-part Question',
                'description' => 'Two-part Question topic exam questions',
                'type_id' => 2,
            ),
        ));
    }
}
