<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    public function getReg(Request $request)
    {
       $reg = $request->reg1.'-'.$request->reg2;
       $Stdreg = StudentRegistration::where('registration_no',$reg)->get();
       if($Stdreg->count() > 0)
       {
        return 'exist';
       }
       else
       {
        return 'nil';
       }    
    }
}
