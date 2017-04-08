<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingPost extends Model
{
    protected $fillable = [
        'address_name', 'latitude',
        'longitude', 'batch_id',
    ];
}
