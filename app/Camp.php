<?php

namespace App;

class Camp extends Model
{
    public function scopeActives($query){
        return $query->where('active',1);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
