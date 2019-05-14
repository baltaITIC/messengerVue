<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');

            //User
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            

            //Contact
            $table->unsignedInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('users');
            
            $table->boolean('listen_notifications')->default(true);
            $table->boolean('has_blocked')->default(true);
            
            //Last Message
            $table->text('last_message')->nullable();
            $table->dateTime('last_time')->nullable();
            
            
            
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
        Schema::dropIfExists('conversations');
    }
}
