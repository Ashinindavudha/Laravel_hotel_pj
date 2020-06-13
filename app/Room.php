<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['room_number','roomtype_id','floor_id','status'];

    public function roomtype()
        {
            return $this->belongsTo('App\RoomTypes');
        }

        public function room()
        {
            return $this->belongsTo('App\Room');
        }

        public function floor()
        {
            return $this->belongsTo('App\Floor');
        }

}
