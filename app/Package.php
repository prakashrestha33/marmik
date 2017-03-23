<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Package extends Model
{
    use Notifiable;


    protected $fillable = [
        'type', 'price', 'weight',


    ];


}
