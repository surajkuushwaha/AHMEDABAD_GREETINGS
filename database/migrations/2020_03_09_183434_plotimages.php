<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plotimages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Plotimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Plot_id');
            $table->mediumText('image1')->nullable();
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
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
        //
    }
}
