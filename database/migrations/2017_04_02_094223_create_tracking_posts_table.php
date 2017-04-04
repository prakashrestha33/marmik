<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_name');
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('batch_id')->unsigned();

            $table->timestamps();
            $table->foreign('batch_id')->references('id')->on('batches')
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
        Schema::dropIfExists('tracking_posts');
    }
}
