<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tittle',256);
            $table->string('subtittle',100);
            $table->string('slug');
            $table->text('body');
            $table->boolean('status');
            $table->integer('posted_by');
            $table->string('image');
            $table->integer('like');
            $table->integer('dislike');
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
        Schema::dropIfExists('post_blogs');
    }
}
