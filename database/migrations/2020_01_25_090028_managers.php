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
            // $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('Phone_no')->nullable();
            $table->integer('address_id')->nullable();
            $table->boolean('verified')->nullable();
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
