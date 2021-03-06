<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 255)->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->rememberToken();
            $table->string('nickname', 50)->unique();
            $table->string('tel', 11)->nullable();
            $table->string('detail', 1000)->nullable();
            $table->integer('email_flg')->default(0);
            $table->integer('delete_flg')->default(0);
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
        Schema::dropIfExists('users');
    }
}
