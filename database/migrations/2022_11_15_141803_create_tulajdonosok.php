<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tulajdonosok', function (Blueprint $table) {
            $table->id("id");
            $table->string("nev",50);
            $table->dateTime("tulajdonjog_kezd");
            $table->dateTime("tulajdonjog_veg");
            $table->foreignId('autok_id')->references('id')->on('autok');
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
        Schema::dropIfExists('tulajdonosok');
    }
};
