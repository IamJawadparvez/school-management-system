<?php

namespace App\Http\Controllers;

use App\Models\Van;
use App\Models\VanRoute;
use Illuminate\Http\Request;

class VanController extends Controller
{
   public function van(){
    $vans= Van::with('Vans')->get();
    return view('newtemplates.admin.van',compact('vans'));
  }

  public function addvan(Request $request)
  {

        Van::insert([
               'name'=>$request->van,
          ]);
return redirect()->route('admin.van');        
  }

  public function editvan(Request $request)
  {
     $van = Van::where('id',$request->id)->first();
      $van->name = $request->van;
      $van->save();      

    return redirect()->route('admin.van');        
  }

    public function deleteVan($id)
  {
      $vanroute = VanRoute::where('van_id',$id)->delete();      
      $van = Van::where('id',$id)->delete();
      return redirect()->route('admin.van');        
  }

}
