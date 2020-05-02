<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){
        return $this->belongsTo ('App\User');
    }
    public function scopecommingbooking($query){
        return $query->where('booking_date','>',now());
    }
    public function scopepassedbooking($query){
        return $query->where('booking_date','<',now());
    }

}
