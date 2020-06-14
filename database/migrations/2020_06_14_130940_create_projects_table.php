<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('title')->nullable(); //
            $table->text('intro')->nullable(); //
            $table->longText('info')->nullable(); //
            $table->string('location')->nullable(); //
            $table->text('image')->nullable(); //
            $table->text('video_link')->nullable(); //
            $table->string('data_type')->nullable(); //video or image, (one word)
            $table->float('target', 12, 2)->nullable(); //number of times page visited
            $table->float('achieved', 12, 2)->nullable(); //number of times page visited
            $table->string('tags')->nullable(); //words to link similar projects
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
        Schema::dropIfExists('projects');
    }
}
