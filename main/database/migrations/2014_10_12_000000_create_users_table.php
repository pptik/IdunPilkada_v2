<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user',255);
            $table->string('username', 255);
            $table->string('bio', 3000);
            $table->string('password',255);
            $table->string('email',255)->unique();
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('path_image',255);
            $table->string('lokasi',255);
            $table->integer('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
