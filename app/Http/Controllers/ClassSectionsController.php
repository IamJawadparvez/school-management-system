<?php

namespace App\Http\Controllers;

use App\Models\ClassSections;
use Illuminate\Http\Request;
use App\Models\Sections;
use App\Models\Classes;

class ClassSectionsController extends Controller
{
    public function classsection($id)
    {
         $class=Classes::where('id',$id)->first();
         $section=Sections::all();

        return view('newtemplates.admin.section_class',compact('class','section'));

    }
    public function section(Request $request)
    {

        $section=ClassSections::where('id',$request->id)->where('id',$request->section_name)->first();
  
          if(empty($section))
          {
          $newsection=ClassSections::create([
          'class_id'=>$request->id, 
          'section_id'=>$request->section_name
          ]);
          return redirect()->back();

          }
          else{

            return redirect()->back();
          }

    }


public function addsubjects(){

return view('newtemplates.admin.subject');




}

    
}
