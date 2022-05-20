<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $table = 'student_registration';
    public function StudentRegistration(){
        return $this->belongsTo('App\Models\User','student_id','id');
    }
     public function classes(){
        return $this->hasOne('App\Models\Classes','student_id','id');
    }
}
