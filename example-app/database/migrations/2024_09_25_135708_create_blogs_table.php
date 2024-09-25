<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title',255);
            $table->string('Url_slug',255)->unique();
            $table->text('description');
            $table->tinyInteger('display_on_home');
            $table->string('thumbnail',255);
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users');
            $table->enum('status',[1,0]);
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
        Schema::dropIfExists('blogs');
    }
};
