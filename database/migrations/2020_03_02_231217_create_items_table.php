<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->unsignedInteger('user_id');
            $table->string('detail', 1000)->nullable();
            $table->integer('category_1');
            $table->integer('category_2');
            $table->integer('price');
            $table->string('file_path')->nullable();
            $table->dateTime('video_time')->nullable();
            $table->unsignedInteger('course_id');
            $table->integer('preview_id');
            $table->integer('preview_flg')->default(0);
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
        Schema::dropIfExists('items');
    }
}
