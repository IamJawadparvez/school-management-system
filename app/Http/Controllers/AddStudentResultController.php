<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\Classes;
use App\Models\Student;

class AddStudentResultController extends Controller
{
    public function addresults($id){
    	$addresult=User::where('id',$id)->first();
       $student=Student::where('student_id',$id)->first();
       


    	// $subject=ClassSubject::where('class_id',$id);
    		// $class=Classes::wizth('studentresult')->first    		
    		//dd($class);

     return view('newtemplates.admin.addstudentresult',compact('addresult','student'));


    }
}
