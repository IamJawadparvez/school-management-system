<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
  public function classes(){
    $class = Classes::with('totalClass')->get();
    return view('newtemplates.admin.classes',compact('class'));
  }

  public function addclass(Request $request)
  {

        CLasses::insert([
               'name'=>$request->class,
          ]);
return redirect()->route('admin.class');        
  }


    public function editclass(Request $request)
  {
     $class = Classes::where('id',$request->id)->first();
      $class->name = $request->class;
      $class->save();      

    return redirect()->route('admin.class');        
  }

  public function deleteClass($id)
  {

      $class = Classes::where('id',$id)->delete();
      return redirect()->route('admin.class');        
  }

}
