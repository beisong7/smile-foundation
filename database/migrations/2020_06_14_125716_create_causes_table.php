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
            $table->uuid('uuid')->nullable(); //unique ID
            $table->string('title')->nullable(); // Title
            $table->string('small_title')->nullable(); // Title
            $table->uuid('user_id')->nullable(); //person who created it
            $table->string('location')->nullable(); //
            $table->integer('hits')->nullable(); // number of times page visited
            $table->text('intro')->nullable(); //
            $table->longText('info')->nullable(); //
            $table->string('goal')->nullable(); // words to link similar cause
            $table->string('tags')->nullable(); // words to link similar cause
            $table->string('featured')->nullable();
            $table->string('youtube')->nullable();
            $table->boolean('active')->nullable(); //
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
