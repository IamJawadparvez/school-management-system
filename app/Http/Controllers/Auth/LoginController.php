<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    //use AuthenticatesUsers;
    use AuthenticatesUsers;
    public function login()
    {
      //dd('siodhfo;ih');

      return view('login');
    }
    protected function postlogin(Request $request)
    { 

      //dd($request);

        $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);

               $email = $request->input('email');
               $password = $request->input('password');

       if(!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
          
          return redirect()->back()->with('danger','Username & Password combination doesn\'t not match');
        
        } 
        // dd(Auth::user());
        if(Auth::user()->hasAccess(['admin'])){

          return redirect()->route('admin.home')->with('success','WELCOME '.Auth::user()->username.'...');
        
        }elseif(Auth::user()->hasAccess(['owner'])){
          dd('owner');
          return redirect()->route('owner.home')->with('success','WELCOME '.Auth::user()->username.'...'); 
        
        }elseif(Auth::user()->hasAccess(['subadmin'])){
          dd('subadmin');
          return redirect()->route('subadmin.home')->with('success','WELCOME '.Auth::user()->username.'...'); 
        
        }else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 
    }

public function logout(Request $request) {
  Auth::logout();
 return redirect()->route('login');
}

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
