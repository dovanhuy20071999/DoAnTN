<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert(array(
            array(
                'order_id' => 1,
                'gradle' => 70,
                'review' => 'Bài viết tốt',
                'comment' => 'Bài viết cần cải thiện thêm từ vựng và ngữ pháp'
            ),
            array(
                'order_id' => 2,
                'gradle' => 80,
                'review' => 'Bài viết chưa đúng chủ đề',
                'comment' => 'Bạn cần tập trung vào chủ đề chính của bức tranh'
            ),
            array(
                'order_id' => 3,
                'gradle' => 85,
                'review' => 'Hoàn thành rất tốt',
                'comment' => 'Bài viết rất tốt, chủ đề được khai thác đúng trọng tâm'
            ),
        ));
    }
}
