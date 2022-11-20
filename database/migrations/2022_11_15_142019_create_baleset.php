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
        Schema::create('baleset', function (Blueprint $table) {
            $table->id("id");
            $table->dateTime("Idopont");
            $table->string("serules_leirasa",1000);
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
        Schema::dropIfExists('baleset');
    }
};
