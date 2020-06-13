<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineBooking extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'check_in', 'check_out', 'price',
    ];
}
