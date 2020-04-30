<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //1st convention : table name
    //protected $table = 'my_members';

    //2nd convention : primary key (id)
    //protected $primaryKey = 'cin';

    //3rd convention : primary key auto incrementing
    //public $incrementing = false;

    //4th convention : timestamps (created_at & updated_at)
    public $timestamps = false;
}
