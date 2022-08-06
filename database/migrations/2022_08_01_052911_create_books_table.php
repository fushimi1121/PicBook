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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publisher_id'); //外部キー
            $table->string('title');
            $table->text('body');
            $table->unsignedInteger('price'); //負の値にならないように
            $table->unsignedBigInteger('isbn_13'); //数値が13桁である制約
            $table->date('released_at');
            $table->string('age');
            $table->string('cover_img');
            $table->timestamps();

            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};

//Schema::create('event_venue', function (Blueprint $table) {
//    $table->id();
//    $table->bigInteger('event_id')->unsigned();
//    $table->bigInteger('venue_id')->unsigned();
//    $table->timestamps();
//
//    $table->foreign('event_id')->references('id')->on('events');
//    $table->foreign('venue_id')->references('id')->on('venues');
//});
