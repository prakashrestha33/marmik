<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('receiver_name');
            $table->bigInteger('receiver_mobile_no');
            $table->string('shipment_type');
            $table->string('package_id');
            $table->string('delivery_country');
            $table->string('delivery_state');
            $table->string('delivery_city');
            $table->string('delivery_street_name')->nullable();
            $table->string('delivery_home_no');
            $table->bigInteger('tracking_id')->unique();
            $table->date('departure_date');
            $table->date('delivery_date');
            $table->boolean('delivery_status');
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
        Schema::dropIfExists('shipments');
    }
}
