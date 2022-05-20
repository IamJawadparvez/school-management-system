<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table  = 'classes';
    public function totalClass(){
        return $this->hasMany('App\Models\StudentRegistration','admission_class','id');
    }

    public function studentresult(){
        return $this->hasMany('App\Models\student','student_id','id');
    }


}
