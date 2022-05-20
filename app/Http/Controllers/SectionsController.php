<?php

namespace App\Http\Controllers;


use App\Models\Sections;
use Illuminate\Http\Request;


class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sections()
    {
            $section = Sections::get();
      
        return view('newtemplates.admin.section',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addsection(Request $request)
    {
        //dd($request);
         Sections::insert([
               'section_name'=>$request->section_name,
          ]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editsection(Request $request)
    {
        $sectionedit=Sections::where('id',$request->id)->first();
        $sectionedit->section_name=$request->section_name;
        $sectionedit->save();
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
    public function deletesection($id)
    {
        
        
        
        
      $section = Sections::where('id',$id)->delete();
      return redirect()->back();  
    }
}
