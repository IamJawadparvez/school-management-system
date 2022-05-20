<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    protected $table='class_subject';
     protected $fillable=[
     	'subject_id','class_id'
     ];
}
