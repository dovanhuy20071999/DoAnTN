<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Văn Huy',
                'email' => 'admin@email.com',
                'password' => '$2y$10$u.VD3G9ucgHqAo2FLOYCOul.85O5hrgIiyhNZNj8U3boJA.W7Zwi2',
                'role' => 0,
            ),
            array(
                'name' => 'Huyyy',
                'email' => 'huyyy@email.com',
                'password' => '$2y$10$leh9hhhLUWGYdXwDEC8GnOpx..Ga21NNoNAEq3GpjEXzWpWWZZMCe',
                'role' => 1,
            ),
        ));
    }
}
