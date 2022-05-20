<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\ClassSubject;

use Illuminate\Http\Request;

class ClassSubjectController extends Controller
{
     public function classsubject($id)
    {
         $class=Classes::where('id',$id)->first();
         $subject=Subject::all();

        return view('newtemplates.admin.classsubject',compact('class','subject'));

    }




      public function subjects(Request $request)
    {

			foreach ($request->subject_name as  $value) {

			
        $subject=ClassSubject::where('id',$request->id)->where('id',$value)->first();
  
          if(empty($subject))
          {
          $newsubject=ClassSubject::create([
          'class_id'=>$request->id, 
          'subject_id'=>$value
          ]);
          return redirect()->back();
      	}

      }
    }
}
