<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $updated_at = Carbon::now()->toDateTimeString();
        $send_date = Carbon::now()->toDateString();
        DB::table('orders')->insert(array(
            array(
                'user_id' => 2,
                'status' => 1,
                'send_date' => $send_date,
                'essay_id' => 2,
                'test_id' => 6,
                'deadline_id' => 1,
                'type_id' => 1,
                'total_price' => 100,
                'teacher_id' => 1,
                'result_id' => 1,
                'updated_at' => $updated_at,
            ),
            array(
                'user_id' => 2,
                'status' => 1,
                'send_date' => $send_date,
                'essay_id' => 4,
                'test_id' => 2,
                'deadline_id' => 1,
                'type_id' => 1,
                'total_price' => 150,
                'teacher_id' => 2,
                'result_id' => 2,
                'updated_at' => $updated_at,
            ),
            array(
                'user_id' => 2,
                'status' => 0,
                'send_date' => $send_date,
                'essay_id' => 6,
                'test_id' => 7,
                'deadline_id' => 1,
                'type_id' => 1,
                'total_price' => 150,
                'teacher_id' => null,
                'result_id' => null,
                'updated_at' => $updated_at,
            ),
        ));
    }
}
