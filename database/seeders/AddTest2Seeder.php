<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTest2Seeder extends Seeder
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
                'topic_id' => 9,
                'question' => 'Some people think that hosting an international sports event is good for the country, while some people think it is bad. Discuss both views and state your opinion.',
            ),
            array(
                'topic_id' => 9,
                'question' => 'Some people think students should study the science of food and how to prepare it. Others think that school time should be used in learning important subjects. Discuss both views and give your opinion?',
            ),
            array(
                'topic_id' => 11,
                'question' => 'Some countries allow old people to work to any age that they want. Do the advantages outweigh the disadvantages?',
            ),
            array(
                'topic_id' => 12,
                'question' => 'Some people store personal and private information online, including banking, contacts and addresses. Is it a positive or negative trend?',
            ),
            array(
                'topic_id' => 10,
                'question' => 'Many people are working longer hours. Why is this happening? What problems can this cause to people?',
            ),
            array(
                'topic_id' => 8,
                'question' => 'People believe that individuals who make a lot of money are the most successful. Others say that those who contribute to society like scientists, teacher are the most successful. Discuss both and give your opinion?',
            ),
            array(
                'topic_id' => 10,
                'question' => 'Many students find it difficult to concentrate or pay attention in school. What are the reasons? What could be done to solve this problem?',
            ),
            array(
                'topic_id' => 11,
                'question' => 'It is now possible for scientists and tourists to travel to remote natural environment, such as South pole. Do the advantages of this development outweigh the disadvantages?',
            ),
            array(
                'topic_id' => 13,
                'question' => 'Write a paragraph to describe school education system in Vietnam',
            ),
            array(
                'topic_id' => 14,
                'question' => 'Why do we need to protect the environment? Please list possible measures to protect the environment',
            ),
            array(
                'topic_id' => 15,
                'question' => 'What type of art do you like best? Write a short paragraph about that art form',
            ),
            array(
                'topic_id' => 16,
                'question' => 'Why are children seen as the future of the country? In your opinion, what is the right way to educate children?',
            ),
            array(
                'topic_id' => 17,
                'question' => 'How important is family to you? Please express your family love through a short paragraph',
            ),
        ));
    }
}
