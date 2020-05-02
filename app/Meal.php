<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function orderline(){
        return $this->hasMany('App\OrderLine');
    }
}
