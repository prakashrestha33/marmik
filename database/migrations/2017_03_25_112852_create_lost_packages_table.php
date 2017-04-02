<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLostPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('tracking_id')->unique();
            $table->bigInteger('contact');
            $table->string('email');
            $table->timestamps();
            $table->foreign('tracking_id')->references('tracking_id')->on('shipments')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lost_packages');
    }
}
