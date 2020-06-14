<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(); //
            $table->longText('main_title')->nullable(); //
            $table->string('sub_title')->nullable(); //
            $table->boolean('donate')->nullable(); //
            $table->boolean('menu')->nullable(); //
            $table->text('image')->nullable(); //
            $table->text('menu_type')->nullable(); //type of menu seen below
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
        Schema::dropIfExists('banners');
    }
}
