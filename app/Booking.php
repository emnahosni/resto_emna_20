<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){
        $this->belongsTo ('App\User');
    }

}