<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('steam_appid');
            $table->string('name');
            $table->longText('detailed_description');
            $table->longText('about_the_game');
            $table->string('header_image');
            $table->string('price');
            $table->integer('metacritic_score');
            $table->string('metacritic_url');
            $table->boolean('is_linux');
            $table->boolean('is_mac');
            $table->boolean('has_achievements');
            $table->string('screen1');
            $table->string('screen1_thumb');
            $table->string('screen2');
            $table->string('screen2_thumb');
            $table->string('screen3');
            $table->string('screen3_thumb');
            $table->string('screen4');
            $table->string('screen4_thumb');
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
        Schema::drop('games');
    }
}
