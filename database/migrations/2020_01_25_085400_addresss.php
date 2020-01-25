<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addresss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Addresss', function (Blueprint $table) {
            $table->integer('Address_id');
            $table->string('street',100);
            $table->integer('Pin_code');
            $table->string('city',20);
            $table->string('state',20);
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
        Schema::dropIfExists('Addresss');
    }
}
