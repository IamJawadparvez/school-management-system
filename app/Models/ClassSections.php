<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSections extends Model
{
    protected $table='class_section';
     protected $fillable=[
     	'section_id','class_id'
     ];
}
