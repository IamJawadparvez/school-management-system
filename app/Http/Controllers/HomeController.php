<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Session;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Area;
use App\Models\House;
use App\Models\Van;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

    public function welcome()
    {
    	return view('welcome');
    }

    public function adminhome()
    {
    	$student = Student::count();
    	$van = Van::count();
    	$classes = Classes::count();
    	$house = House::count();
    	    	    	    	    	
    	return view('newtemplates.admin.home',compact('student','van','classes','house'));
    }


	public function profile()
	{
		return view('templates.admin.changepassword');
	}

	public function changepass(Request $request)
	{

		$this->validate($request,[
			'password' => 'required|min:7',
        ]); 

		if($request->password!=$request->confirmpassword)
		{
					   Session::flash('danger', 'Password doesnot Match');               
  					return back();
		}
		else
		{
			if(Hash::check($request->oldpassword,Auth::user()->password))
			{
				$user_password = User::where('id',Auth::user()->id)->first();
				  $user_password->password = bcrypt($request->input('password'));
    	   		  $user_password->save();
    	   		  Session::flash('success', 'Password Changed');               
  					return back();
			}
			else
			{
					   Session::flash('danger', 'Old Password doesnot Match');               
  					return back();
			}

		}
	}
}
