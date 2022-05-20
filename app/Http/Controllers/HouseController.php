<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HouseController extends Controller
{
    public function house()
    {
        $houses = House::with('House')->get();
      alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');


        return view('newtemplates.admin.houses',compact('houses'));
    }

public function addhouse(Request $request)
  {

        House::insert([
               'name'=>$request->house,
          ]);
return redirect()->route('admin.house');        
  }

  public function edithouse(Request $request)
  {
     $house = House::where('id',$request->id)->first();
      $house->name = $request->house;
      $house->save();      

    return redirect()->route('admin.house');        
  }


    public function deleteHouse($id)
  {

      $house = House::where('id',$id)->delete();
      return redirect()->route('admin.house');        
  }

}
