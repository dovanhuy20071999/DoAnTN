<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
                $table->integer('role');
                $table->string('address')->nullable();
                $table->integer('gender')->nullable();
                $table->string('phone_number')->nullable();
                $table->integer('job')->nullable();
                $table->string('date_of_birth')->nullable();
                $table->integer('rate_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
