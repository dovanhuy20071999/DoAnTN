<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTestSeeder extends Seeder
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
                'question' => 'The bar charts illustrate the average house expenses in England and its capital city – London, and to present the comparison regarding the average house prices between distinct areas of England within the year 2013.',
                'image_id' => 1,
            ),
            array(
                'topic_id' => 1,
                'question' => 'The graphs below show the cinema attendance in Australia and the average cinema visits by different age groups from 1996 to 2000. Summarize the information by selecting and reporting the main features and make comparisons where relevant.',
                'image_id' => 2,
            ),
            array(
                'topic_id' => 3,
                'question' => 'The bar chart shows the percentage of small , medium, large companies which used social media for business purposes between 2012 to 2016.',
                'image_id' => 3,
            ),
            array(
                'topic_id' => 4,
                'question' => 'The table shows the export values of various products in 2009 and 2010.',
                'image_id' => 4,
            ),
            array(
                'topic_id' => 7,
                'question' => 'The maps below show the changes in the art gallery ground floor in 2015 and present day',
                'image_id' => 5,
            ),
            array(
                'topic_id' => 2,
                'question' => 'The pie charts below show the online shopping sales for retail sectors in New Zealand in 2003 and 2013.',
                'image_id' => 6,
            ),
            array(
                'topic_id' => 5,
                'question' => 'The graph and table below show the average monthly temperatures and the average number of hours of sunshine per year in three major cities.',
                'image_id' => 7,
            ),
            array(
                'topic_id' => 6,
                'question' => 'The diagrams below show the stages and equipment used in the cement-making process, and how cement is used to produce concrete for building purposes.',
                'image_id' => 8,
            ),
        ));
    }
}
