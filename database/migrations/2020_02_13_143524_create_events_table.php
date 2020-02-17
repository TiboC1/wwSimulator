<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('severity');
            $table->string('title');
            $table->string('description');
            $table->string('choice1desc')->nullable();
            $table->string('choice2desc')->nullable();
            $table->string('choice3desc')->nullable();
            $table->string('choice4desc')->nullable();
            $table->string('choice1health')->nullable();
            $table->string('choice2health')->nullable();
            $table->string('choice3health')->nullable();
            $table->string('choice4health')->nullable();
            $table->string('choice1mental')->nullable();
            $table->string('choice2mental')->nullable();
            $table->string('choice3mental')->nullable();
            $table->string('choice4mental')->nullable();
            $table->string('choice1bravery')->nullable();
            $table->string('choice2bravery')->nullable();
            $table->string('choice3bravery')->nullable();
            $table->string('choice4bravery')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
