<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class batch extends Model
{
    use Notifiable;



    protected $fillable = [
    'tracking_id','batch_id'

    ];

}
