<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['room_id','guest_id','check_in','check_out','total'];

    public function guest()
        {
            return $this->belongsTo('App\Guest');
        }

        public function room()
        {
            return $this->belongsTo('App\Room');
        }
}
