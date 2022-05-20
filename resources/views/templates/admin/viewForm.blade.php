vv@extends('templates.default')
@section('content')
<style type="text/css">
	.margin{
		margin-top:10px;
	}
	.input{
		border-radius: 5px;
	}
	.text{
		text-align: center;
	}
	.display{
		display: inline;
	}
	.registration{
    margin: 0 auto;
    width: 98%;

    border-style: solid;
	}

.img {
	width: 80%;
}
.parent{

    margin: 0 auto;
    width: 98%;

    border-style: solid;
	}

.fee{

    margin: 0 auto;
    width: 98%;

    border-style: solid;
	}	

.preschool{

    margin: 0 auto;
    width: 98%;

    border-style: solid;
	}

	.buttons{

    margin: 0 auto;
    width: 98%;

    border-style: solid;
	}		
.custom-file-upload{
	    border-style: solid;
    background-color: #dddddd;
}

@media print {

  [class*="col-sm-"] {
    float: left;
  }

  [class*="col-xs-"] {
    float: left;
  }

  .col-sm-12, .col-xs-12 {
    width:100% !important;
  }

  .col-sm-11, .col-xs-11 {
    width:91.66666667% !important;
  }

  .col-sm-10, .col-xs-10 {
    width:83.33333333% !important;
  }

  .col-sm-9, .col-xs-9 {
    width:75% !important;
  }

  .col-sm-8, .col-xs-8 {
    width:66.66666667% !important;
  }

  .col-sm-7, .col-xs-7 {
    width:58.33333333% !important;
  }

  .col-sm-6, .col-xs-6 {
    width:50% !important;
  }

  .col-sm-5, .col-xs-5 {
    width:41.66666667% !important;
  }

  .col-sm-4, .col-xs-4 {
    width:33.33333333% !important;
  }

  .col-sm-3, .col-xs-3 {
    width:25% !important;
  }

  .col-sm-2, .col-xs-2 {
    width:16.66666667% !important;
  }

  .col-sm-1, .col-xs-1 {
    width:8.33333333% !important;
  }

  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12,
  .col-xs-1,
  .col-xs-2,
  .col-xs-3,
  .col-xs-4,
  .col-xs-5,
  .col-xs-6,
  .col-xs-7,
  .col-xs-8,
  .col-xs-9,
  .col-xs-10,
  .col-xs-11,
  .col-xs-12 {
  float: left !important;
  }

  body {
    margin: 0;
    padding: 0 !important;
    min-width: 768px;
  }

  .container {
    width: auto;
    min-width: 750px;
  }

  body {
    font-size: 10px;
  }

  a[href]:after {
    content: none;
  }



  .noprint,
  div.alert,
  header,
  .group-media,
  .btn,
  .footer,
  form,
  #comments,
  .nav,
  ul.links.list-inline,
  ul.action-links {
    display:none !important;
  }
}  

</style>
<div class="row">
	<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12  ">
	<button type="button" class="btn btn-primary pull-right" onclick="myPrint()">Print</button>		
	</div>

</div>
<div class="row" id="print">
	<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12  ">
		@if($errors->any())
			<div class="alert alert-warning">
  				<strong>Warning!</strong> Check below for errors.
			</div>
		@endif
	</div>
	<form method="POST" action="{{route('admin.SaveStudent')}}" enctype="multipart/form-data">
		@csrf
		<input type="hidden" value="{{$id}}" name="student_id">
	<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12   margin">
		
		<div class="col-md-3">
			<label>Date of Admission</label>	
			<input type="date" name="admission_date" class="form-control" value="{{isset($student->Registration)?$student->Registration->date:''}}">
		</div>


		<div class="col-md-6">
			<h1 class="text">Admission Form</h1>
		</div>

		<div class="col-md-3">
			
			<label>Family No.</label>	
			<input type="text" name="family_no" class="form-control" value="{{isset($student->Registration)?$student->Registration->family_no:''}}">

		</div>
	</div>
<div id="registration" class="registration">
	<div class="row">
	<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12   margin">
		
		<div class="col-md-5">

			<div class="col-md-4">
			<label>Registration No</label>					

			</div>
				<?php
				$r1='';
					$r2='';	
				if(isset($student->Registration))
				{

				 $reg = $student->Registration->registration_no; 
					  $r = explode('-', $reg) ; 
					  if(isset($r[1]))
					  {
					  $r1 = $r[0];
					  $r2 = $r[1];
					  }
					  else
					  {
					  $r2 = $r[0];					  					  	
					  }				  
				}
				else
				{
					$r1='';
					$r2='';					
				}
				?>
			<div class="col-md-7">
				<input type="text" name="registration_no1" value="{{$r1}}" class="form-control display" style="width: 35%;" id="reg1">							
				<input type="text" name="registration_no2" value="{{$r2}}" class="form-control display" style="width: 60%;" id="reg2">	
				<span id="regError"></span>						
			</div>
			
			<div class="col-md-1">
				<button class="btn" type="button" onclick="searchReg()"><i class="fa fa-search"></i></button>
			</div>

		</div>


		<div class="col-md-7">
			<div class="col-md-3">
				<label>Class Roll No</label>					
			</div>

			<div class="col-md-9">
				<input type="text" name="class_roll_no" class="form-control" value="{{isset($student->Registration)?$student->Registration->class_roll_no:''}}">				
			</div>

		</div>

	</div>

<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12  ">
	<div class="col-md-10">
		<div class="col-sm-12 col-xs-12 col-md-12 ">

			<div class="col-md-3">
				<label>Admission To Class</label>
			</div>

			<div class="col-md-3">
				<select class="form-control" name="admission_to_class" required="required">

					<option value="{{isset($student->Registration)?$student->Registration->admission_class:''}}">{{isset($student->Registration)?$student->Registration->admission_class:''}}</option>

					@foreach($classes as $class)
					<option value="{{$class->id}}">{{$class->name}}</option>
					@endforeach
				</select>	
			</div>

			<div class="col-md-2">
				<label>Current Class</label>
			</div>

			<div class="col-md-4">
				<select class="form-control" name="current_class" required="required">
				
					<option value="{{isset($student->Registration)?$student->Registration->current_class:''}}">{{isset($student->Registration)?$student->Registration->current_class:''}}</option>					
			

				@foreach($classes as $class)
					<option value="{{$class->id}}">{{$class->name}}</option>
					@endforeach					
				</select>	
			</div>
		</div>
		
		<div class="col-sm-12 col-xs-12 col-sm-12 col-xs-12 col-md-12  " style="margin-top: 10px;">

			<div class="col-md-2">
				<label>Student Name</label>
			</div>

			<div class="col-md-3">
				<input type="text" class="form-control" name='student_name' value="{{$student->std_name}}" required="required">
			</div>
			<div class="col-md-2">
				<label>Gender</label>
			</div>

			<div class="col-md-4">
				@if($student->gender=='MALE' || $student->gender=='male')
				<input type="radio" name="gender" value="male" required="required" checked="checked"> Male
				@else
				<input type="radio" name="gender" value="male" required="required"> Male
				@endif

				@if($student->gender=='FEMALE' || $student->gender=='female')
				<input type="radio" name="gender" value="female" required="required" checked="checked"> Female	 			
				@else
				<input type="radio" name="gender" value="female" required="required"> Female	 			
				@endif
			</div>
		</div>


	<div class="col-sm-12 col-xs-12 col-md-12 " style="margin-top: 10px;">

			<div class="col-md-2">
				<label>Date of Birth</label>
			</div>

			<div class="col-md-3">
				<input type="date" class="form-control" name="birth_date" id="dt" value="{{$student->date_of_birth}}" required="required">
			</div>

			<div class="col-md-1">
				<label>Age</label>
			</div>

			<div class="col-md-2">
				<input type="text" class="form-control" name="age" value="{{$student->age}}" id="age" readonly="readonly">
			</div>


			<div class="col-md-2">
				<label>Blood Group</label>
			</div>

			<div class="col-md-2">
				<select class="form-control" name="blood_group">
					
					<option value="{{$student->blood_group}}">{{$student->blood_group}}</option>
					

					<option value="A +ive">A +ive</option>
					<option value="B -ive">B -ive</option>
					<option value="B +ive">B +ive</option>
					<option value="B -ive">B -ive</option>
					<option value="O +ive">O +ive</option>
					<option value="O -ive">O -ive</option>					
				</select>
			</div>
		</div>

	
	 </div>

	<div class="col-md-2">
		<div>
			@if(!empty($student->Image))
				@if($student->Image->image=='' || $student->Image->image==NULL)
				<img src="{{asset('public/images/user.jpg')}}" title="size 110 x 130" alt="size 110 x 130" class="img" id="imagePreview">
				@else
				<img src="{{asset('public/std_images/'.$student->Image->image)}}" title="size 110 x 130" alt="size 110 x 130" class="img" id="imagePreview">
				@endif
			@else
				<img src="{{asset('public/images/user.jpg')}}" title="size 110 x 130" alt="size 110 x 130" class="img" id="imagePreview">
			@endif	
				<label for="file-upload" class="custom-file-upload btn" >
			    Paste
				</label>
				<input id="file-upload" type="file" name="image" style="display: none" id="fileUploader" onchange="changeImg(this)" />
				<button class="btn" type="button" onclick="removeImg()">Clear</button>
			</div>	
	</div>
</div>





<div class="clearfix"></div>
<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Home Address</label>
			</div>

			<div class="col-md-10">
				<input type="text" class="form-control" name="home_address" value="{{$student->home_address}}">
			</div>

</div>

<div class="col-sm-12 col-xs-12 col-md-12  margin">
			<div class="col-md-2">
				<label>Nationality</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="nationality" value="{{$student->nationality}}">				
			</div>



			<div class="col-md-2">
				<label>First Language</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="first_language" value="{{$student->first_language}}">

			</div>
</div>


<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Select Area \ Village</label>
			</div>

			<div class="col-md-4">
				<select class="form-control" name="area">

					<option value="{{$student->area}}">{{$student->area}}</option>

				@foreach($areas as $area)
					<option value="{{$area->id}}">{{$area->name}}</option>
					@endforeach	
				</select>
			</div>




			<div class="col-md-2">
				<label>Select House</label>
			</div>

			<div class="col-md-4">
				<select class="form-control" name="house">
					
					<option value="{{$student->house}}">{{$student->house}}</option>
									
				@foreach($houses as $house)
					<option value="{{$house->id}}">{{$house->name}}</option>
					@endforeach	

				</select>
			</div>

	</div>

<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Last School Attended</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="last_school" value="{{isset($student->Preschool)?$student->Preschool->pre_school:''}}">				

			</div>




			<div class="col-md-2">
				<label>Reason for Leaving</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="leaving_reason" value="{{isset($student->Preschool)?$student->Preschool->pre_left_school_reason:''}}">				

			</div>

	</div>


<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Health Issues</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="health_issues" value="{{$student->health_issues}}">				

			</div>




			<div class="col-md-2">
				<label>Hobbies / Interest</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="hobbies" value="{{$student->hobbies}}">				

			</div>

	</div>


<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Remedy</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="remedy" value="{{$student->remedy}}">				

			</div>




			<div class="col-md-2">
				<label>Religion</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="religion" value="{{$student->religion}}">				

			</div>

		</div>
	</div>
</div> <!-- registration ends -->

<div class="parent"> 
		<div class="row">	
		<div class="col-sm-12 col-xs-12 col-md-12 ">
			<div class="col-md-9">
				<div class="father"> 

<div class="col-sm-12 col-xs-12 col-md-12  margin ">

			<div class="col-md-2">
				<label>Father Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_name" required="required" value="{{isset($student->Parents)?$student->Parents->father_name:''}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_occupation" value="{{isset($student->Parents)?$student->Parents->father_occupation:''}}">				

			</div>

	</div>

<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Father CNIC No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_cnic" value="{{isset($student->Parents)?$student->Parents->father_cnic:''}}">				

			</div>




			<div class="col-md-2">
				<label>Education</label>
			</div>

			<div class="col-md-4">
				<select class="form-control" name="father_education">
					
					<option value="{{isset($student->Parents)?$student->Parents->father_education:''}}">{{isset($student->Parents)?$student->Parents->father_education:''}}</option>
						
					<option value="Primary">Primary</option>
					<option value="Middle">Middle</option>
					<option value="Matric">Matric</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Bachelors">Bachelors</option>
					<option value="Masters">Masters</option>																				
				</select>

			</div>
	</div>
</div>
<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Mother Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_name" value="{{isset($student->Parents)?$student->Parents->mother_name:''}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_occupation" value="{{isset($student->Parents)?$student->Parents->mother_occupation:''}}">				

			</div>



	</div>


<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Form B No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_form_b" value="{{isset($student->Parents)?$student->Parents->mother_form_b_no:''}}">				

			</div>




			<div class="col-md-2">
				<label>Education</label>
			</div>

			<div class="col-md-4">
				<select class="form-control" name="mother_education">
						<option value="{{isset($student->Parents)?$student->Parents->mother_education:''}}">{{isset($student->Parents)?$student->Parents->mother_education:''}}</option>

					<option value="Primary">Primary</option>
					<option value="Middle">Middle</option>
					<option value="Matric">Matric</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Bachelors">Bachelors</option>
					<option value="Masters">Masters</option>						

				</select>

			</div>

	</div>

<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Guardian Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_name" value="{{isset($student->Guardian)?$student->Guardian->guardian_name:''}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">

				<input type="text" class="form-control" name="guardian_occupation" value="{{isset($student->Guardian)?$student->Guardian->guardian_occupation:''}}">				
			</div>

	</div>


<div class="col-sm-12 col-xs-12 col-md-12  margin">

			<div class="col-md-2">
				<label>Guardian CNIC No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_cnic" value="{{isset($student->Guardian)?$student->Guardian->guardian_cnic_no:''}}">				

			</div>




			<div class="col-md-2">
				<label>Remarks</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_remarks" value="{{isset($student->Guardian)?$student->Guardian->guardian_remarks:''}}" >				
			</div>


				</div>
	</div>

			<div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">

					
					<h5 class="text">Contact Information</h5>					
				<div class="col-sm-12 col-xs-12 col-md-12 ">
					<div class="col-md-4">
						<label>Res Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="res_phone" min="11" value="{{isset($student->Parents)?$student->Parents->res_phone:''}}">				
					</div>

				</div>

				<div class="col-sm-12 col-xs-12 col-md-12 ">
					<div class="col-md-4">
						<label>Father Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="father_phone" min="11" value="{{isset($student->Parents)?$student->Parents->father_phone:''}}">				
					</div>

				</div>

				<div class="col-sm-12 col-xs-12 col-md-12 ">
					<div class="col-md-4">
						<label>Mother Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="mother_phone" min="11" value="{{isset($student->Parents)?$student->Parents->mother_phone:''}}">				
					</div>

				</div>


				<div class="col-sm-12 col-xs-12 col-md-12 ">
					<div class="col-md-4">
						<label>Guardian Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="guardian_phone" min="11" value="{{isset($student->Guardian)?$student->Guardian->guardian_phone:''}}">				
					</div>

				</div>


				<div class="col-sm-12 col-xs-12 col-md-12 ">
					<div class="col-md-4">
						<label>Parent Email</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="parent_email" value="{{isset($student->Parents)?$student->Parents->parent_email:''}}">				
					</div>

				</div>

			<div class="col-sm-12 col-xs-12 col-md-12 ">
				<div >

				<div class="col-md-6">
					@if($student->Document)
					@if($student->Document->photographs=='yes')
					<input type="checkbox" value="yes" name="photographs" checked="checked"><span>Photographs</span>
					@else
					<input type="checkbox" value="yes" name="photographs"><span>Photographs</span>
					@endif

					@else
					<input type="checkbox" value="yes" name="photographs"><span>Photographs</span>
					@endif
				</div>

				<div class="col-md-6">
					@if($student->Document)
					@if($student->Document->father_nic=='yes')
					<input type="checkbox" value="yes" name="father_nic" checked="checked"><span>Father's NIC</span>
					@else
					<input type="checkbox" value="yes" name="father_nic"><span>Father's NIC</span>	
					@endif

					@else
					<input type="checkbox" value="yes" name="father_nic"><span>Father's NIC</span>	
					@endif				
				</div>

				<div class="col-sm-12 col-xs-12 col-md-12 ">
					@if($student->Document)
					@if($student->Document->form_b=='yes')
					<input type="checkbox" value="yes" name="form_b" checked="checked"><span>Form B / Birth Certificate</span>
					@else
					<input type="checkbox" value="yes" name="form_b"><span>Form B / Birth Certificate</span>					
					@endif

					@else
					<input type="checkbox" value="yes" name="form_b"><span>Form B / Birth Certificate</span>					
					@endif
				</div>

				<div class="col-sm-12 col-xs-12 col-md-12 ">
					@if($student->Document)
					@if($student->Document->school_leaving_certificate=='yes')
					<input type="checkbox" value="yes" name="school_leaving" checked="checked"><span>School Leaving Certificate</span>
					@else
					<input type="checkbox" value="yes" name="school_leaving"><span>School Leaving Certificate</span>			
					@endif	

					@else
					<input type="checkbox" value="yes" name="school_leaving"><span>School Leaving Certificate</span>			
					@endif		
				</div>				

				</div>
			</div>

	</div>	
		</div>	
		</div>
</div> <!-- parent ends -->

<div class="fee">
		<div class="row">
		<div class="col-sm-12 col-xs-12 col-md-12  margin">

					<div class="col-md-2">
						<label>Monthly Fee</label>	
					</div>

					<div class="col-md-2">	
						@if($student->Fee)

						<input type="text" class="form-control" id="monthly_fee" name="monthly_fee" value="{{$student->Fee->monthly_fee}}" onkeyup="getAmnt(this)">				
						@else
						<input type="text" class="form-control" id="monthly_fee" name="monthly_fee" value="0" onkeyup="getAmnt(this)">				
						@endif
					</div>

					<div class="col-md-2">	
						@if($student->Fee)
							@if($student->Fee->discount_per=='25')
						<input type="radio" onclick='getDiscount(this)' checked="checked" name="discount_percent" value="25"><span>25 %</span>
							@else
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="25"><span>25 %</span>
							@endif

						@if($student->Fee->discount_per=='50')
						<input type="radio" onclick='getDiscount(this)' checked="checked" name="discount_percent" value="50"><span>50 %</span>
							@else
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="50"><span>50 %</span>
							@endif

						@if($student->Fee->discount_per=='other')
				
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="other" checked="checked" ><span>Other</span>												
						@else
					
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="other" checked="checked" ><span>Other</span>													@endif

	

						@else

						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="25"><span>25 %</span>
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="50"><span>50 %</span>						
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="other" checked="checked" ><span>Other</span>												

						@endif
					</div>

					<div class="col-md-2">
						<label>Discount %age</label>	
					</div>

					<div class="col-md-1">	
						@if($student->Fee)
	
						<input type="text" class="form-control" name="discount" value="{{$student->Fee->discount}}" id="discount" readonly="readonly" onkeyup="getOtherDis(this)">					
							@else

						<input type="text" class="form-control" name="discount" value="0" id="discount" readonly="readonly" onkeyup="getOtherDis(this)">
						@endif

 				
					</div>


					<div class="col-md-1">
						<label>Net Fee</label>	
					</div>

					<div class="col-md-2">

						@if($student->Fee)
	
						<input type="text" id="net_fee"  class="form-control" name="net_fee" value="{{$student->Fee->net_fee}}" readonly="readonly">				
							@else
						<input type="text" id="net_fee"  class="form-control" name="net_fee" value="0" readonly="readonly">				
						@endif


					</div>


				</div>	


				<div class="col-sm-12 col-xs-12 col-md-12  margin">

					<div class="col-md-2">
						@if($student->Fee)
							@if($student->Fee->transport=='yes')
						<input type="checkbox" value="yes" checked="cheked" name="transport" onclick="selectVan(this)"><span>Using Transport</span>
					@else
							
						<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>		
					@endif	

					@else
							
						<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>		
					@endif	


					</div>

					<div class="col-md-2">	
						@if($student->Fee)
						
					
						<input type="text" name="transport_amnt" class="form-control" value="{{$student->Fee->transport_amount}}" readonly="readonly" id="transport_amnt">

					@else
							
						
						<input type="text" name="transport_amnt" class="form-control" value="0" readonly="readonly" id="transport_amnt">
					@endif	
						</div>

					<div class="col-md-2">	
						<label>Select Van</label>
					</div>

					<div class="col-md-2">
						<select class="form-control" name="van" onchange="getRoute()" id="van_id" disabled="disabled" >
						@if($student->Fee)
							<option value="{{$student->Fee->van_id}}">{{$student->Fee->van_id}}</option>
											
							@endif						
						@foreach($vans as $v)
							<option value="{{$v->id}}">{{$v->name}}</option>
						@endforeach	
						</select>
					</div>

					<div class="col-md-1">	
						<label>Route</label>
					</div>

					<div class="col-md-3">	

						<select class="form-control" name="route" id="route">
						@if($student->Fee)
							<option value="{{$student->Fee->van_id}}">{{$student->Fee->route}}</option>
											
							@endif	
						</select>				
					</div>


				</div>					

				<div class="col-sm-12 col-xs-12 col-md-12  margin">

					<div class="col-md-2">
						<label>Security Deposit</label>
					</div>

					<div class="col-md-2">	
						@if($student->Fee)
						<input type="text" name="security_deposit" class="form-control" value="{{$student->Fee->security_deposit}}">
						@else
						<input type="text" name="security_deposit" class="form-control" value="0">
						@endif								

					</div>

					<div class="col-md-2">
						@if($student->Fee)
							@if($student->Fee->security_refunded=='yes')
						<input type="checkbox" value="yes"  name="security_refunded" checked="checked" ><span>Security Refunded</span>
						@else
						<input type="checkbox" value="yes" name="security_refunded" ><span>Security Refunded</span>
						@endif

						@else
						<input type="checkbox" value="yes" name="security_refunded" ><span>Security Refunded</span>
						@endif

					</div>

					<div class="col-md-2">
						<label>Admission Paid</label>	
					</div>

					<div class="col-md-2">	
						@if($student->Fee)
						<input type="text" name="admission_paid" class="form-control" value="{{$student->Fee->admission_paid}}">
						@else
						<input type="text" class="form-control" name="admission_paid" value="0">				
						@endif							

					</div>

					
					<div class="col-md-1">	
						<label>Arrears</label>
					</div>

					<div class="col-md-1">
					@if($student->Fee)
						<input type="text" name="arrears" class="form-control" value="{{$student->Fee->arrears}}">
						@else
							<input type="text" class="form-control" name="arrears" value="0">				
						@endif	
									
					</div>

			</div>		
			</div>			
</div> <!-- fee ends -->

<div class="preschool">
	<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12  margin">
					<div class="col-md-2">

						@if($student->leftSchool)
						<input type="checkbox" value="yes" checked="checked" name="left_school" onclick="getLeftSchool(this)"><span>Left School</span>						
						@else
						<input type="checkbox" value="yes" name="left_school" onclick="getLeftSchool(this)"><span>Left School</span>						
						@endif		
				
					</div>

					<div class="col-md-10">
						<label>Reason to Leave</label>
					</div>					

					<div class="col-md-2">
						
						<input type="date" name="left_school_date" class="form-control" id="left_school_date" disabled="disabled" value="{{isset($student->leftSchool)?$student->leftSchool->left_school_date:''}}">						
					</div>

					<div class="col-md-10">
						
						<input type="text" name="reason_to_leave" class="form-control" id="reason_to_leave" value="{{isset($student->leftSchool)?$student->leftSchool->left_reason:''}}" disabled="disabled">						
					</div>										
			</div>
	</div>	
</div>
<div class="buttons">
<!-- 	<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-12  margin">
					<input type="submit" value="Save" class="btn">				
					<input type="submit" value="Save & Next" class="btn">									
					<input type="reset" value="New" class="btn">														
			</div>
	</div>	 -->
</div>

<div class="errors">
	<div class="row">
		<div class="col-sm-12 col-xs-12 col-md-12 ">
			@if ($errors->any())
    		 <div class="alert alert-danger">
        		<ul>
            		@foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
            		@endforeach
        	    </ul>
    		</div>
			@endif
		</div>
	</div>
</div>

</form>
</div>
<div id="editor"></div>
<script type="text/javascript">
	$("#dt").on("change", function () {
    var myDate = $(this).val();

        var mdate = $("#dt").val().toString();
        var yearThen = parseInt(mdate.substring(0,4), 10);
        var monthThen = parseInt(mdate.substring(5,7), 10);
        var dayThen = parseInt(mdate.substring(8,10), 10);
        
        var today = new Date();
        var birthday = new Date(yearThen, monthThen-1, dayThen);
        
        var differenceInMilisecond = today.valueOf() - birthday.valueOf();
        
        var year_age = Math.floor(differenceInMilisecond / 31536000000);
        var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
        
        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {

        }
        
        var month_age = Math.floor(day_age/30);
        
        day_age = day_age % 30;
        
        if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
            $("#age").val("Invalid birthday - Please try again!");
        }
        else {
            $("#age").val(year_age +" years "+ month_age + " months");
        }
    });

    function myPrint()
    {

  var prtContent = document.getElementById("print");
    var WinPrint = window.open('', '', 'left=0,top=0,width=1350,height=780,toolbar=0,scrollbars=0,status=0');

setTimeout(function(){ 
    WinPrint.document.write('<link rel="stylesheet"media="screen,print"  href="{{asset("public/bower_components/bootstrap/dist/css/bootstrap.min.css")}}"><link media="screen,print" rel="stylesheet" href="{{asset("public/bower_components/font-awesome/css/font-awesome.min.css")}}"><link media="screen,print" rel="stylesheet" href="{{asset("public/css/print.css")}}">');
    WinPrint.document.write(prtContent.innerHTML);

 }, 2000);

setTimeout(function(){ 

    WinPrint.focus();
    WinPrint.print();
    window.top.close();

 }, 3000);


    WinPrint.document.close();  

    //WinPrint.close();

    }

myPrint();
</script>
@include('templates.admin.adminJS')
@endsection