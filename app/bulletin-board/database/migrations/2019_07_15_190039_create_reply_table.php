<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function(Blueprint $table) {
            $table->unsignedInteger('thread_id');
            $table->unsignedInteger('reply_no');
            $table->char('user_id', 7);
            $table->string('handle_name');
            $table->string('host_name');
            $table->string('ip');
            $table->text('message');
            $table->dateTime('created_at');

            $table->foreign('thread_id')->references('id')->on('thread');
            $table->primary(['thread_id', 'reply_no']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reply');
    }
}
