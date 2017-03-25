<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LostPackage extends Model
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'tracking_id',
        'contact',


    ];

}
