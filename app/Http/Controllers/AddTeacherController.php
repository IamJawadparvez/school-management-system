<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherDetails;
use App\Models\TeacherDetail;
use App\Models\User;
 use Session;
class AddTeacherController extends Controller
{
  public function addteachers(){

  return view('newtemplates.admin.addteacher');

  }

  public function addnewteacher(Request $request)
  {

         $user= User::create([
            'name'=>$request->name,
            'email' => $request->email, 
            'phone' => $request->phone, 
            'address'=>$request->address,
            'gender'=>$request->gender,
             'nic'=>$request->nic
          ]);
         
          TeacherDetail::insert([
          	'user_id'=>$user->id,
          'qualification'=>$request->qualification,
           'experience'=>$request->experience
                ]);

          return redirect()->route('admin.allteacher');

     }

      public function teacherdetail()
      {
      	$teachers=User::with('teacherDetail')->get();
      

       return view('newtemplates.admin.allteacher',compact('teachers'));
        


      }
			 public function deleteteacher($id)
       {
                //dd($id);
			      $teachers = User::find($id);
			      if($teachers->teacherDetail){
			      	$teachers->teacherdetail->delete();
			      }
			      $teachers->delete();
			      return redirect()->back();

			 }
        public function editteacher($id)

        {

       $teacher = User::where('id',$id)->first();
      // $teacherdetail=TeacherDetail::where('user_id',$id)->first();
        return view('newtemplates.admin.editTeacher',compact('teacher'));
       // return view('templates.admin.editTeacher');

        }
        public function posteditteacher(Request $request,$id)
        {
        $t = TeacherDetail::where('user_id',$id)->first();
        $t->qualification = $request->qualification;
        $t->experience = $request->experience;  
        $t->save();

        $user = User::where('id',$t->user_id)->first();
        $user->name =$request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nic = $request->nic;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save();       
        return redirect()->route('admin.allteacher');
        }

  
}
