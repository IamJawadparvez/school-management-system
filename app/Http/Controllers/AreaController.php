<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
  public function area(){
    $areas = Area::with('Area')->get();

    return view('newtemplates.admin.area',compact('areas'));
  }

  public function addarea(Request $request)
  {

        Area::insert([
               'name'=>$request->area,
          ]);
return redirect()->route('admin.area');        
  }

  public function editarea(Request $request)
  {

      $area = Area::where('id',$request->id)->first();
      $area->name = $request->area;
      $area->save();      

return redirect()->route('admin.area');        
  }

  public function deleteArea($id)
  {

      $area = Area::where('id',$id)->delete();
      return redirect()->route('admin.area');        
  }


}
