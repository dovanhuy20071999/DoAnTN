<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher')->insert(array(
            array(
                'teacher_name' => 'Bảo Trân',
                'email' => 'tran@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
            array(
                'teacher_name' => 'John Smith',
                'email' => 'john@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
            array(
                'teacher_name' => 'Lan Khuê',
                'email' => 'lankhue@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
        ));
    }
}
