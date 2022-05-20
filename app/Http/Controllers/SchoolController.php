<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Session;
class SchoolController extends Controller
{
    public function schools()
    {
        $school = School::paginate(25);
        return view('newtemplates.admin.schools', compact('school'));
    }

    public function addschool()
    {
        return view('newtemplates.admin.addschool');
    }

    public function addnewschool(Request $request)
    {   

        //dd($request);
        
         $validate = $request->validate([
        'name' => 'required',
        'username' => 'required',
        'email' => 'email',        
        'password'=>'required'
    ]);

            $s_id  = School::insertGetId([
                'uid'=>md5(date('Y-m-d').microtime()),
                'name'=>$request->name,
                'owner_name'=>$request->owner_name, 
                'phone_no'=>$request->phone_no,
                'mobile'=>$request->mobile,
                'email'=>$request->email, 
                'password'=>$request->password,
                'address'=>$request->address
                ]);



                $user = User::insertGetId([
                'name'=>$request->name,
                'username'=>$request->username,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'school_id'=>$s_id, 
                ]);


                $role = Role::where('slug', 'owner')->first();

                $u = User::where('id',$user)->first();
                $u->roles()->attach($role);


             Session::flash('success', 'School Added');               
             return redirect()->route('admin.schools');
    }

    public function editschool($id)
    {
        $school = School::where('id',$id)->first();
        return view('newtemplates.admin.editschool',compact('school'));
    }

    public function posteditschool(Request $request,$id)
    {
        $s = School::where('id',$id)->first();
        $s->name = $request->name;
        $s->mobile = $request->mobile;
        $s->address = $request->address;
        $s->owner_name = $request->owner_name;        
        $s->phone_no = $request->phone_no; 
        $s->email = $request->email;  
        $s->save();

        // $user = User::where('school_id',$s->id)->where('email',$request->user_email)->first();
        // $user->name =$request->name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->save();       

             Session::flash('success', 'School Edited');               
        if($request->action=='Save')
        {
             return redirect()->back();
        }
        else
        {
             return redirect()->route('admin.schools');
        }



    }

    public function deleteschool($id)
    {
        //dd($id);
         $School = School::where('id',$id)->delete();
      return redirect()->back();  
    }

    public function viewusers($id)
    {
        $users = User::where('school_id',$id)->with('roles')->get();
        return view('newtemplates.admin.schoolusers',compact('users'));
    }
}
