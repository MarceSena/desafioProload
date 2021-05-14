<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StatusMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusMessage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('message_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('sent')->default('sent');
            $table->string('not sent')->default('not sent'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statusMessage');
    }
}
