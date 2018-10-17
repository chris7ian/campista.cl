<?php

namespace App;

class Booking extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function camp(){
        return $this->belongsTo(Camp::class,'camp_id');
    }
}
