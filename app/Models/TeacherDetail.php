<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    
    protected  $table='teacher_detail';
    protected $fillable = [
        'qualification', 'experience','user_id'
    ];
     public function user(){
    	return $this->belongsTo('App\Models\User','user_id','id');
    }
}
