<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('detail')->nullable();
            $table->string('venue')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('time')->nullable();
            $table->integer('status')->nullable();
            $table->string('type')->nullable();
            $table->integer('image')->nullable();
            $table->string('ticket')->nullable();
            $table->string('has_cert')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
