<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table="schools";
    protected $fillable=[
    'id','uid','name','owner_name','phone_no','mobile','email','password','address'
    ];
}
