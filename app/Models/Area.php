<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';
 	
 	public function Area(){
        return $this->hasMany('App\Models\Student','area','id');
    }

}
