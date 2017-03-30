<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pickup extends Model
{
    use Notifiable;


    protected $fillable = [
        'customer_id','receiver_address', 'contact', 'weight',
        'pickup_date', 'shipment_type', 'package_id',
    ];
}
