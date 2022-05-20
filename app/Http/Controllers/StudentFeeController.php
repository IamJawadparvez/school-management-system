<?php

namespace App\Http\Controllers;

use App\Models\StudentFee;
use Illuminate\Http\Request;

class StudentFeeController extends Controller
{
	 public function StudentFee($id)
	 {

	   $studentfee =StudentFee::where('student_id',$id)->paginate(10);
	 return view('newtemplates.admin.studentfee',compact('studentfee','id'));

	 }
	public function deletefeerecord($id)
	{
		 $feerecord = Studentfee::where('id',$id)->first();
		// dd($id);
		 $feerecord->delete();
	      return redirect()->back();  
	}

     public function studenteditfee($id)
     {
      $studentfee=StudentFee::where('id',$id)->first();
      return view('newtemplates.admin.editStudentfee', compact('studentfee','id'));


     }

	 public function posteditfee(Request $request,$id)
	 {


      $fee=StudentFee::where('id',$id)->first();
      // $fee->student_id =$request->student_id;
       $fee->monthly_fee =$request->monthly_fee;
       $fee->discount_per =$request->discount_per;
       $fee->net_fee =$request->net_fee;
       $fee->transport =$request->transport;
       $fee->transport_amount =$request->transport_amount;
       $fee->security_deposit =$request->security_deposit;
       $fee->security_refunded =$request->security_refunded;
       $fee->admission_paid =$request->admission_paid;
       $fee->arrears =$request->arrears;
       $fee->save();
       $redirect=$request->redirect_id;
       return redirect()->route('admin.studentfee',$redirect);

	 } 
	 public function AddStudentFee($id)
	 {
     $newfee=StudentFee::where('student_id',$id)->first();
     //dd($id);
     return view('newtemplates.admin.addStudentfee',compact('id','newfee'));



	 }



   public function addnewfee(Request $request){
// /dd($request);
   $newfee=StudentFee::insert([
    'student_id'=>$request->student_id,
   'monthly_fee'=>$request->monthly_fee,
   'discount_per'=>$request->discount_percent,
   'discount'=>$request->discount,
   'transport'=>$request->transport,
   'transport_amount'=>$request->transport_amnt,
   'security_deposit'=>$request->security_deposit,
   'arrears'=>$request->arrears,
   'totalfee'=>$request->totalfee


   ]);
   return redirect()->back();









   }




}
