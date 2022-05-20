<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     protected  $table='users';
    protected $fillable = [

        'name', 'email','nic', 'phone','address','gender','dob','age',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    /**
     * Checks if User has access to $permissions.
     */
    public function hasAccess(array $permissions) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if the user belongs to role.
     */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
    public function teacherDetail(){
        return $this->hasOne('App\Models\TeacherDetail','user_id','id');
    }
     public function Registration(){
        return $this->hasOne('App\Models\StudentRegistration','student_id','id');
    }
    public function students(){

        return $this->hasone('App\Models\Student','student_id','id');
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

    

}