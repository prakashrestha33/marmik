<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Shipment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'receiver_name', 'shipment_type',
        'package_id', 'delivery_country', 'delivery_state',
        'delivery_city', 'delivery_street_name', 'delivery_home_no',
        'tracking_id'


    ];

    protected $hidden =[
        'tracking_id'
    ];

}

