<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread', function(Blueprint $table) {
            $table->Increments('id');
            $table->unsignedSmallInteger('category_id');
            $table->string('title');
            $table->string('handle_name_template');
            $table->dateTime('created_at');

            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply');
        Schema::dropIfExists('thread');
    }
}
