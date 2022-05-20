<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Area;
use App\Models\Classes;
use App\Models\Guardian;
use App\Models\Parents;
use App\Models\StudentDocuments;
use App\Models\StudentFee;
use App\Models\StudentImage;
use App\Models\Student;
use App\Models\Sections;
use App\Models\PreSchool;
use App\Models\House;
use App\Models\StudentRegistration;
use App\Models\Van;
use App\Models\VanRoute;
use App\Models\LeftSchool;
use Session;
use File;
use Excel;
use Illuminate\Support\Facades\Input;
use Redirect;
use Illuminate\Support\Facades\Schema;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function add_user($id)
    {

    	$roles = Role::all();
    	return view('templates.admin.add_user',compact('roles','id'));
    }

    public function addschooluser(Request $request)
    {

    	$validate = $request->validate([
        'name' => 'required',
        'username' => 'required',
        'email' => 'email',        
        'password'=>'required',
        'school_id'=>'required', 
    ]);

    		$user = User::insertGetId([
                'name'=>$request->name,
                'username'=>$request->username,
                'phone_no'=>$request->phone_no,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'school_id'=>$request->school_id, 
                ]);


                $role = Role::where('id',$request->user_role)->first();

                $u = User::where('id',$user)->first();
                $u->roles()->attach($role);
			
			Session::flash('success', 'User Added');               
             return redirect()->route('admin.schools');

    }

    public function admissionForm()
    {
           $areas = Area::all(); 
           $houses = House::all();
           $section=Sections::all();            
           $classes = Classes::all();
           $vans= Van::all();
           $error = [];
           $last_reg_id = StudentRegistration::orderBy('id', 'desc')->first();;

           $randStr = random();
           $last_std_id = StudentRegistration::where('registration_no',$randStr)->get();           
           if($last_std_id->count() > 0)
           {    
                $randStr = random();
           }
 
        $r = explode('-',$randStr);
        $reg  = 0;

        if(!empty($last_reg_id))
        {
            $rg = explode('-', $last_reg_id->registration_no);
            if(isset($rg[1]))
            {
            $reg = $rg[1]+1;
            }
            else
            {
            $reg = $rg[0]+1;
            }


        }
        else
        {
            $reg = 1;
        }
        return view('newtemplates.admin.admissionform',compact('areas','houses','classes','vans','r','reg','error','section'));
    }

public function saveForm(Request $request)
    {



        $validatedData = $request->validate([
        'current_class' => 'required',
        'student_name' => 'required',
        'gender' => 'required',
        'birth_date' => 'required',
        'father_name' => 'required',           
            ]);



    $r = StudentRegistration::where('registration_no',$request->registration_no1."-".$request->registration_no2)->get();    
 if($r->count()>0)
 {
      Session::flash('danger', 'Registerion Number Exist');               
         return Redirect::back()->withInput(Input::all());
 }
             //dd($request);
            $std_data=User::insertGetId([
            'name'=>$request->student_name,
            'gender'=>$request->gender,
            'dob'=>$request->birth_date,
            'age'=>$request->age
            
            ]);
            //dd($request);

            $std_id = Student::insertGetId([
                //'std_name'=>$request->student_name,
                //'gender'=>$request->gender,
                //'date_of_birth'=>$request->birth_date,
                //'age'=>$request->age,
                 'student_id'=>$std_data,
                 'section_id'=>$request->section_name,
                 'class_id'=>$request->admission_to_class,
                'blood_group'=>$request->blood_group,
                'home_address'=>$request->home_address, 
                'nationality'=>$request->nationality,
                'first_language'=>$request->first_language,
                'area'=>$request->area,
                'house'=>$request->house,
                'health_issues'=>$request->health_issues,
                'hobbies'=>$request->hobbies,       
                'remedy'=>$request->remedy,
                'religion'=>$request->religion,                
                ]);

$photographs = 'no';$form_b = 'no';$school_leaving_certificate = 'no';$father_nic = 'no';
            if($request->photographs)             
                {
                    $photographs = 'yes';
                }
            
            if($request->form_b)             
                {
                   $form_b = 'yes';;
                }
             

            if($request->school_leaving_certificate)             
                {
                    $school_leaving_certificate = 'yes';;
                }
             
            if($request->father_nic)             
                {
                    $father_nic = 'yes';
                }
             
                StudentDocuments::insert([
                'student_id'=>$std_data,
                'photographs'=>$photographs,
                'form_b'=>$form_b,
                'school_leaving_certificate'=>$school_leaving_certificate,
                'father_nic'=>$father_nic,
                ]);
                $transport='no'; $security_refunded='no';
            if($request->transport)
                {
                $transport='yes';
                }
            if($request->security_refunded)
                {
                $security_refunded='yes';
                }
                         
                StudentFee::insert([
                'student_id'=>$std_data,
                'monthly_fee'=>$request->monthly_fee,
                'discount'=>$request->discount,
                'discount_per'=>$request->discount_percent,
                'net_fee'=>$request->net_fee,
                'transport'=>$transport,                
                'transport_amount'=>$request->transport_amnt,
                'van_id'=>$request->van,
                'route'=>$request->route,
                'security_deposit'=>$request->security_deposit,
                'security_refunded'=>$security_refunded,
                'admission_paid'=>$request->admission_paid,
                'arrears'=>$request->arrears,

                ]);       
                  

                Guardian::insert([
                'student_id'=>$std_data,
                'guardian_name'=>$request->guardian_name,
                'guardian_occupation'=>$request->guardian_occupation,
                'guardian_cnic_no'=>$request->guardian_cnic,
                'guardian_remarks'=>$request->guardian_remarks,
                'guardian_phone'=>$request->guardian_phone,                

                ]);  


                $file = $request->file('image');
            if($file)
                    {           
                $filename = md5(date('Y-m-d').microtime()).".".$file->getClientOriginalExtension();      
                    $image_resize = Image::make($file);              
                    $image_resize->resize(110, 130);
                    $image_resize->save(public_path("std_images/" .$filename));

                StudentImage::insert([
                'student_id'=>$std_data,
                'image'=>$filename,
                ]);       

            }
        
                       
                StudentRegistration::insert([
                'student_id'=>$std_data,
                'date'=>$request->admission_date,
                'family_no'=>$request->family_no,
                'registration_no'=>$request->registration_no1.'-'.$request->registration_no2,
                'class_roll_no'=>$request->class_roll_no,
                'admission_class'=>$request->admission_to_class,
                'current_class'=>$request->current_class,
                'house_id'=>$request->house,

                ]); 
                if($request->last_school)

             {
                PreSchool::insert([
                'student_id'=>$std_data,
                'pre_school'=>$request->last_school,
                'pre_left_school_reason'=>$request->leaving_reason,
                ]);
            }

                if($request->left_school_date)
                {                    
                    LeftSchool::insert([
                      'student_id'=>$std_data,
                      'left_school_date'=>$request->left_school_date,
                      'left_reason'=>$request->reason_to_leave,
                        ]);  
        
                }
                                   

                Parents::insert([
                'student_id'=>$std_data,
                'father_name'=>$request->father_name,
                'father_occupation'=>$request->father_occupation,
                'father_cnic'=>$request->father_cnic,
                'father_education'=>$request->father_education,
                'mother_name'=>$request->mother_name,
                'mother_occupation'=>$request->mother_occupation,
                'mother_form_b_no'=>$request->mother_form_b,
                'mother_education'=>$request->mother_education,
                'res_phone'=>$request->res_phone,
                'father_phone'=>$request->father_phone,
                'mother_phone'=>$request->mother_phone,
                'parent_email'=>$request->parent_email,                

                ]); 



             Session::flash('success', 'Registered');               
             return redirect()->route('admin.admissionForm');
    }

public function allStudents()
    {
         $users = User::paginate(25);

         return view('newtemplates.admin.allstudents',compact('users'));   
    } 

public function import(Request $request)
{

             if($request->hasFile('excel')){
            $extension = File::extension($request->excel->getClientOriginalName());
          
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->excel->getRealPath();

                $data = Excel::load($path, function($reader) {
                 $reader->setDateFormat('Y-m-d');

                })->get();

                 $File = $request->file('excel'); //line 1

                  $File->move(public_path('excel/'),$request->excel->getClientOriginalName());

                if(!empty($data) && $data->count()){

                  $excelname  = date('Y-m-d').time().".".$extension;
                        $all = array();
                        $temp = array();
                        
                        $r=0;
                        
                             
                          $h = explode('{', $data[0][0]);

                            $h = explode('}', $h[1]); 
                          
                            $h = explode(',"', $h[0]);
                             
                            foreach($h as $hh)
                            { 

                              $h = explode('":', $hh);
                                if($h[0]!='0')
                                {
                                   array_push($temp, $h[0]);                                  
                                }

                            }
                            

                            foreach ($temp as $t) {

                              if( strpos($t, '"') !== false ) {
                              $h = explode('"', $t);
                              array_push($all, $h[1]); 
                              }
                              else
                              {
                              array_push($all, $t);                                 
                              }
                        }

                      $tdata =array();
                      $y=0;

                    foreach ($data[0] as $key => $value) {

                          $val = array();

                          foreach($all as $a)
                          {

                            if($value[$a]!=NULL)
                            {
                              
                                array_push($val,$value[$a]);
                                
                            } 
                          }
                      array_push($tdata,$val);                                            
                  }

            }
        }
      }
$tdata = array_filter($tdata);

      $filename = $request->file('excel')->getClientOriginalName();
        $students  = Schema::getColumnListing('students');
        $std_parents  = Schema::getColumnListing('std_parents');
        $std_pre_school  = Schema::getColumnListing('std_pre_school'); 
        $student_document  = Schema::getColumnListing('student_document');
        $student_fee  = Schema::getColumnListing('student_fee'); 
        $student_guardian  = Schema::getColumnListing('student_guardian');
        $student_image  = Schema::getColumnListing('student_image');   
        $left_school  = Schema::getColumnListing('left_school');    
        $student_registration  = Schema::getColumnListing('student_registration');               


        return view('templates.admin.import',compact('all','filename','tdata','students','std_parents','std_pre_school','student_document','student_fee','student_guardian','student_image','student_registration','left_school'));
}


public function Saveimport(Request $request,$tsize)
{

   $reg = 0 ;
   $reg_id = '';
   $errors=[];
$last_reg_id = Student::orderBy('id', 'desc')->first();

             if(empty($last_reg_id))
            {
                $reg++;
            }
            else
            {
                
                $reg = $last_reg_id->id;

                $reg++;
            }

        $count = $request->colno-1;

       for($s =1; $s<=$tsize;$s++)
       { 


        
             $student = new Student();
             $StudentDocuments = new StudentDocuments();
             $StudentFee = new StudentFee();
             $leftschool = new LeftSchool();
             $Guardian = new Guardian();
             $StudentImage = new StudentImage();
             $StudentRegistration = new StudentRegistration();
             $PreSchool = new PreSchool();
             $Parents = new Parents() ;
         
            

        for($t=1;$t<=$count;$t++)
        {
           

          if($request->input('col'.$t)!='')
          {
            $DBcol=$request->input('row'.$t);
            $col=$request->input('col'.$t);
            $student['id']=$reg;
            $Parents['student_id']=$reg;
            $PreSchool['student_id']=$reg;
            $StudentDocuments['student_id']=$reg;
            $StudentFee['student_id']=$reg;
            $Guardian['student_id']=$reg;
            $StudentImage['student_id']=$reg;
            $StudentRegistration['student_id']=$reg;
            $leftschool['student_id']=$reg;
     $c = explode('-',$col);

        if($c[0]=='students')
             {
                $student[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='std_parents')
             {
                $Parents[$c[1]]=$request->input('tdata'.$s."".$t);
                                        
             }
        elseif($c[0]=='std_pre_school')
             {
                $PreSchool[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='student_document')
             {
                $StudentDocuments[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='student_fee')
             {
                $StudentFee[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='student_guardian')
             {
                $Guardian[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='student_image')
             {
                $StudentImage[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }
        elseif($c[0]=='student_registration')
             {
                if($c[1]=='admission_class' || $c[1]=='current_class')
                {

                  $cl = Classes::where('name',$request->input('tdata'.$s."".$t))->first();

                  if(empty($cl))
                  {

                      $cid = Classes::insertGetId([
                      'name'=>$request->input('tdata'.$s."".$t),
                    
                    ]);
                  }
                  else
                  {
                    $cid = $cl->id;
                  }


                $StudentRegistration[$c[1]]=$cid;                  
                }
                else
                {
                $StudentRegistration[$c[1]]=$request->input('tdata'.$s."".$t);                  
                }

                if($c[1]=='registration_no')
                {
                  $reg_id = $request->input('tdata'.$s."".$t);
                }
                
             }     
      
       elseif($c[0]=='left_school')
             {
                $leftschool[$c[1]]=$request->input('tdata'.$s."".$t);
                
             }     


          }

        }

  $r = StudentRegistration::where('registration_no',$reg_id)->get();    
 if($r->count()>0)
 {
    array_push($errors, $reg_id);
 }
 else
 {
             $student->save();
             $StudentDocuments->save();
             $StudentFee->save();
             $Guardian->save();
             $StudentImage->save();
             $StudentRegistration->save();
             $PreSchool->save();
             $Parents->save();
             $leftschool->save();  
             $reg++;              
 }
       

                
                              
      }

if(sizeof($errors) > 0)
{
  $err = -1;
  foreach ($errors as $key => $e) {
    if($err==-1)
    {
      $err = 'These Registration Numbers Already Exist '.$e.", ";
    }
    else
    {
      $err = $err.$e.", ";
    }
  }
             Session::flash('warning', $err);               
             return redirect()->route('admin.allStudents');  
}
else
{
             Session::flash('success', 'Registered');               
             return redirect()->route('admin.allStudents');  
}



}

public function editStudent($id)
{
           $areas = Area::all(); 
           $houses = House::all();            
           $classes = Classes::all();
           $vans= Van::all();
           $section=Sections::all();

    $user = User::where('id',$id)->with('Registration')->with('Document')->with('Fee')->with('Image')->with('Preschool')->with('leftSchool')->with('Guardian')->with('Parents')->with('students')->with('Sections')->first();

    //dd($student);
    return view('templates.admin.editStudent',compact('user','id','areas','houses','classes','vans','section'));
}

public function ViewForm($id)
{
           $areas = Area::all(); 
           $houses = House::all();            
           $classes = Classes::all();
           $vans= Van::all();
           $section=Sections::all();

    $student = Student::where('id',$id)->with('Registration')->with('Document')->with('Fee')->with('Image')->with('Preschool')->with('leftSchool')->with('Guardian')->with('Parents')->with('Sections')->first();

    return view('templates.admin.viewForm',compact('student','id','areas','houses','classes','vans','section'));
}




public function SaveStudent(Request $request)
{
             $student =Student::where('id',$request->student_id)->first();
             $StudentDocuments =StudentDocuments::where('student_id',$request->student_id)->first();
             $StudentFee =StudentFee::where('student_id',$request->student_id)->first();
             $leftschool =LeftSchool::where('student_id',$request->student_id)->first();
             $Guardian =Guardian::where('student_id',$request->student_id)->first();
             $StudentImage =StudentImage::where('student_id',$request->student_id)->first();
             $StudentRegistration = StudentRegistration::where('student_id',$request->student_id)->first();
             $PreSchool = PreSchool::where('student_id',$request->student_id)->first();
             $Parents = Parents::where('student_id',$request->student_id)->first();
         

                //$student->std_name=$request->student_name;
                //$student->gender=$request->gender;
                //$student->date_of_birth=$request->birth_date;
                //$student->age=$request->age;
                $student->blood_group=$request->blood_group;
                $student->home_address=$request->home_address; 
                $student->nationality=$request->nationality;
                $student->first_language=$request->first_language;
                $student->area=$request->area;
                $student->house=$request->house;
                $student->health_issues=$request->health_issues;
                $student->hobbies=$request->hobbies;       
                $student->remedy=$request->remedy;
                $student->religion=$request->religion;
                $student->save();

        $photographs = 'no';$form_b = 'no';$school_leaving_certificate = 'no';$father_nic = 'no';
            if($request->photographs)             
                {
                    $photographs = 'yes';
                }
            
            if($request->form_b)             
                {
                   $form_b = 'yes';;
                }
             

            if($request->school_leaving_certificate)             
                {
                    $school_leaving_certificate = 'yes';;
                }
             
            if($request->father_nic)             
                {
                    $father_nic = 'yes';
                }

                $StudentDocuments->photographs=$photographs;
                $StudentDocuments->form_b=$form_b;
                $StudentDocuments->school_leaving_certificate=$school_leaving_certificate;
                $StudentDocuments->father_nic=$father_nic;
                $StudentDocuments->save();


               $transport='no'; $security_refunded='no';
            if($request->transport)
                {
                $transport='yes';
                }
            if($request->security_refunded)
                {
                $security_refunded='yes';
                }

                $StudentFee->monthly_fee=$request->monthly_fee;
                $StudentFee->discount=$request->discount;
                $StudentFee->discount_per=$request->discount_percent;
                $StudentFee->net_fee=$request->net_fee;
                $StudentFee->transport=$transport;                
                $StudentFee->transport_amount=$request->transport_amnt;
                $StudentFee->van_id=$request->van;
                $StudentFee->route=$request->route;
                $StudentFee->security_deposit=$request->security_deposit;
                $StudentFee->security_refunded=$security_refunded;
                $StudentFee->admission_paid=$request->admission_paid;
                $StudentFee->arrears=$request->arrears;
                $StudentFee->save();


                 
                $leftschool->left_school_date=$request->left_school_date;
                $leftschool->left_reason=$request->reason_to_leave;
                $leftschool->save();


                $Guardian->guardian_name=$request->guardian_name;
                $Guardian->guardian_occupation=$request->guardian_occupation;
                $Guardian->guardian_cnic_no=$request->guardian_cnic;
                $Guardian->guardian_remarks=$request->guardian_remarks;
                $Guardian->guardian_phone=$request->guardian_phone;
                $Guardian->save(); 

                 $file = $request->file('image');
            if($file)
                    {           
                $filename = md5(date('Y-m-d').microtime()).".".$file->getClientOriginalExtension();      
                    $image_resize = Image::make($file);              
                    $image_resize->resize(110, 130);
                    $image_resize->save(public_path("std_images/" .$filename));


                $StudentImage->image=$filename;
                $StudentImage->save();

            }

                $StudentRegistration->date=$request->admission_date;
                $StudentRegistration->family_no=$request->family_no;
            $StudentRegistration->registration_no=$request->registration_no1.'-'.$request->registration_no2;
                $StudentRegistration->class_roll_no=$request->class_roll_no;
                $StudentRegistration->admission_class=$request->admission_to_class;
                $StudentRegistration->current_class=$request->current_class;
                $StudentRegistration->house_id=$request->house;
                $StudentRegistration->save();


                $PreSchool->pre_school=$request->last_school;
                $PreSchool->pre_left_school_reason=$request->leaving_reason;
                $PreSchool->save();

              $Parents->father_name=$request->father_name;
                $Parents->father_occupation=$request->father_occupation;
                $Parents->father_cnic=$request->father_cnic;
                $Parents->father_education=$request->father_education;
                $Parents->mother_name=$request->mother_name;
                $Parents->mother_occupation=$request->mother_occupation;
                $Parents->mother_form_b_no=$request->mother_form_b;
                $Parents->mother_education=$request->mother_education;
                $Parents->res_phone=$request->res_phone;
                $Parents->father_phone=$request->father_phone;
                $Parents->mother_phone=$request->mother_phone;
                $Parents->parent_email=$request->parent_email;
                $Parents->save(); 






             Session::flash('success', 'Updated');               
             return redirect()->route('admin.allStudents');
}


public function printForm()
{
  return view('templates.admin.printForm');
}
}
