<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
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
                'topic_id' => 3,
                'question' => 'The bar charts illustrate the average house expenses in England and its capital city – London, and to present the comparison regarding the average house prices between distinct areas of England within the year 2013',
                'image_id' => 1,
            ),
            array(
                'topic_id' => 3,
                'question' => 'The bar chart shows the percentage of small , medium, large companies which used social media for business purposes between 2012 to 2016',
                'image_id' => 2,
            ),
            array(
                'topic_id' => 4,
                'question' => 'The table shows the export values of various products in 2009 and 2010',
                'image_id' => 3,
            ),
        ));
    }
}
