<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_detail', function (Blueprint $table) {
            $table->integer('group_detail_id')->autoIncrement();
            $table->boolean('group_detail_status');
            $table->integer('user_id');
            $table->integer('group_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('group_id')->references('group_id')->on('groups');
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
        Schema::dropIfExists('group_detail');
    }
}
