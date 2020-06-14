<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(); //
            $table->uuid('user_id')->nullable(); //
            $table->string('author')->nullable(); //
            $table->string('location')->nullable(); //
            $table->text('image')->nullable(); //
            $table->integer('hits')->nullable(); //number of times page visited
            $table->longText('info')->nullable(); //
            $table->string('tags')->nullable(); //words to link similar cause
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
        Schema::dropIfExists('causes');
    }
}
