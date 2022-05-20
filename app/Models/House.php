<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table='houses';
public function House(){
        return $this->hasMany('App\Models\StudentRegistration','house_id','id');
    }

}
