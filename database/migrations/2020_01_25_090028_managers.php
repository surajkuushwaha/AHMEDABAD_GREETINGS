<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Managers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Managers', function (Blueprint $table) {
            $table->integer('Manager_id');
            $table->string('email');
            $table->bigInteger('Phone_no');
            $table->integer('address_id');
            $table->boolean('verified');
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
        Schema::dropIfExists('Managers');
    }
}
