<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function orderline(){
        $this->hasMany('App\OrderLine');
    }
}
