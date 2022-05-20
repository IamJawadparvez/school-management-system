<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    	  public function Registration(){
        return $this->hasOne('App\Models\StudentRegistration','student_id','id');
    }

        	  public function Document(){
        return $this->hasOne('App\Models\StudentDocuments','student_id','id');
    }

        	  public function Fee(){
        return $this->hasOne('App\Models\StudentFee','student_id','id');
    }

        	  public function Image(){
        return $this->hasOne('App\Models\StudentImage','student_id','id');
    }

    public function Preschool(){
        return $this->hasOne('App\Models\PreSchool','student_id','id');
    }

    public function leftSchool(){
        return $this->hasOne('App\Models\LeftSchool','student_id','id');
    }

    public function Guardian(){
        return $this->hasOne('App\Models\Guardian','student_id','id');
    }

    public function Parents(){
        return $this->hasOne('App\Models\Parents','student_id','id');
    }

    public function User(){

     return $this->belong('App\Models\User','student_id','id');

    }
    public function Classes(){
    return $this->hasOne('App\Models\Classes','student_id','id');
      }

}
