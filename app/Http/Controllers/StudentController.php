<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\Parents;
use App\Models\StudentDocuments;
use App\Models\StudentFee;
use App\Models\StudentImage;

use App\Models\PreSchool;
use App\Models\House;
use App\Models\StudentRegistration;
use App\Models\Van;
use App\Models\VanRoute;
use App\Models\LeftSchool;
use Session;

class StudentController extends Controller
{
    public function deleteStudent($id)
    {
        LeftSchool::where('student_id',$id)->delete();
        PreSchool::where('student_id',$id)->delete();
        Student::where('id',$id)->delete();
        StudentRegistration::where('student_id',$id)->delete();
        StudentImage::where('student_id',$id)->delete();
        StudentFee::where('student_id',$id)->delete();
        Guardian::where('student_id',$id)->delete();
        StudentDocuments::where('student_id',$id)->delete();
        Parents::where('student_id',$id)->delete();        

             Session::flash('success', 'Deleted');               
             return redirect()->route('admin.allStudents');
    } 

    public function ShowStdRecord($num)
    {
        $num = (int)$num;
         $students = Student::with('Registration')->paginate($num);
         
dd($num);
         return view('templates.admin.allstudents',compact('students','num'));   
    }

}
