<?php

namespace App\Http\Controllers;

use App\Models\VanRoute;
use Illuminate\Http\Request;

class VanRouteController extends Controller
{
   public function viewroute($id)
   {
    $vanroutes = VanRoute::where('van_id',$id)->with('VansRoute')->get();

    return view('newtemplates.admin.vanroutes',compact('vanroutes','id')); 
   }

     public function addroute(Request $request)
  {

        VanRoute::insert([
               'name'=>$request->route,
               'van_id'=>$request->van_id,               
          ]);
return redirect()->route('admin.viewroute',['id'=>$request->van_id]);        
  }

  public function getRoute(Request $request)
  {
        $vanroutes = VanRoute::where('van_id',$request->id)->get();
        return $vanroutes;
  }


  public function editroute(Request $request)
  {
     $van = VanRoute::where('id',$request->id)->first();
      $van->name = $request->route;
      $van->save();      

    return redirect()->back();        
  }


    public function deleteVanRoute($id)
  {
      $vanroute = VanRoute::where('id',$id)->delete();      
    return redirect()->back();        
  }
}
