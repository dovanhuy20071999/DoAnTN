<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder2 extends Seeder
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
                'teacher_name' => 'David',
                'email' => 'david@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
            array(
                'teacher_name' => 'Ronal',
                'email' => 'ronal@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
            array(
                'teacher_name' => 'Hà Duy Phương',
                'email' => 'phuong@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
            array(
                'teacher_name' => 'Lê Thị Lan',
                'email' => 'lan@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
            ),
        ));
    }
}
