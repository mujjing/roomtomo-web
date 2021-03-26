<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->text('roomImg_url');
            $table->string('prefecture', 255);
            $table->string('city', 255);
            $table->string('station', 255);
            $table->string('train1', 255);
            $table->string('train2', 255)->nullable();
            $table->string('train3', 255)->nullable();
            $table->string('room_name', 255);
            $table->string('room_py', 255);
            $table->string('type', 255);
            $table->string('price', 255);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('room_condition', function (Blueprint $table) {
            $table->bigIncrements('room_condition_id');
            $table->bigInteger('room_id');
            $table->string('condition', 255);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('favoriate', function (Blueprint $table) {
            $table->bigIncrements('favoriate_id');
            $table->bigInteger('user_id');
            $table->bigInteger('room_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->bigInteger('user_id');
            $table->string('title', 255);
            $table->string('content', 500);
            $table->dateTime('application_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
        Schema::dropIfExists('room_condition');
        Schema::dropIfExists('favoriate');
        Schema::dropIfExists('contact');
    }
}
