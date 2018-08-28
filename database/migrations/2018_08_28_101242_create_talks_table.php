<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('speaker_id')->index();
            $table->unsignedInteger('event_id')->index();
            $table->string('title');
            $table->string('slug');
            $table->mediumText('abstract');
            $table->timestamps();

            $table->foreign('speaker_id')->references('id')->on('speakers');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talks');
    }
}
