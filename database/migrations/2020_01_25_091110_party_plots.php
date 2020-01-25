<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartyPlots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PartyPlots', function (Blueprint $table) {
            $table->integer('Plot_id');
            $table->string('name',20);
            $table->integer('Event_id');
            $table->integer('Height');
            $table->integer('Width');
            $table->integer('Packege');
            $table->integer('owner');
            $table->integer('address_id');            
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
        Schema::dropIfExists('PartyPlots');
    }
}
