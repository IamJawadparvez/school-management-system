<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VanRoute extends Model
{
    protected $table='van_routes';
		public function VansRoute()
		{
        return $this->hasMany('App\Models\StudentFee','route','id');
    	}


}
