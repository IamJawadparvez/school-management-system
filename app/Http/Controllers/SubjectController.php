<?php

namespace App\Http\Controllers;


use App\Models\Subject;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subjects()
    {
            $sub = Subject::get();
      
        return view('newtemplates.admin.subject',compact('sub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addsubject(Request $request)
    {
        //dd($request);
         Subject::insert([
               'subject_name'=>$request->subject_name,
          ]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editsubject(Request $request)
    {
        $subjectedit=Subject::where('id',$request->id)->first();
        $subjectedit->subject_name=$request->subject_name;
        $subjectedit->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App\Models\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App\Models\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App\Models\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App\Models\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function deletesubject($id)
    {
        
        
        
        
      $subjectdelete = Subject::where('id',$id)->delete();
      return redirect()->back();  
    }
}

