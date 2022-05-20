<?php

namespace App\Http\Controllers;
use App\Models\Result;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(){

    	
            $result = Result::get();
      
        return view('newtemplates.admin.result',compact('result'));
    }



      public function addresult(Request $request)
    {
        //dd($request);
         Result::insert([
               'name'=>$request->name,
          ]);
        return redirect()->back();
    }







     public function editresult(Request $request)
    {
        $edit=Result::where('id',$request->id)->first();
        $edit->name=$request->name;
        $edit->save();
        return redirect()->back();
    }





     public function deleteresult($id)
    {
        
        
        
        
      $result = Result::where('id',$id)->delete();
      return redirect()->back();  
    }
}
