<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
   protected $table = 'van';

public function Vans(){
        return $this->hasMany('App\Models\StudentFee','van_id','id');
    }


}
