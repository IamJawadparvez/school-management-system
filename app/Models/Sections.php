<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
	protected $table="sections";
     protected $fillable=[
     	'id','section_name'
     ];
}
