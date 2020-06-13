<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypes extends Model
{
    protected $fillable=['room_name','total_room','price','facility_name','description','image'];

    public function facility(){
        return $this->belongsTo('App\Facility');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'roomtype_id');
    }
}
