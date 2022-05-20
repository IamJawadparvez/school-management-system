@extends('templates.default')
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
.pad{
	padding-left: 0px;
	padding-right: 0px;
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
	<button type="button" class="btn btn-primary pull-right" onclick="Myprint()">Print</button>		
	</div>

</div>

<div class="row" id="print">
	<div class="col-md-12">
		@if($errors->any())
			<div class="alert alert-warning">
  				<strong>Warning!</strong> Check below for errors.
			</div>
		@endif
	</div>
	<form method="POST" action="{{route('admin.saveForm')}}" enctype="multipart/form-data">
		@csrf
	<div class="col-md-12 margin">
		
		<div class="col-md-3">
			<label>Date of Admission</label>	
			<input type="text" name="admission_date" class="form-control" value="">
		</div>


		<div class="col-md-6">
			<h1 class="text">Admission Form</h1>
		</div>

		<div class="col-md-3">
			
			<label>Family No.</label>	
			<input type="text" name="family_no" class="form-control" value="{{old('family_no')}}">

		</div>
	</div>
<div id="registration" class="registration">
	<div class="row">
	<div class="col-md-12 margin pad">
		
		<div class="col-md-5">

			<div class="col-md-4">
			<label>Registration No</label>					

			</div>

			<div class="col-md-7">
				<input type="text" name="registration_no1"  class="form-control display" style="width: 35%;" id="reg1">							
				<input type="text" name="registration_no2" value="" class="form-control display" style="width: 60%;" id="reg2">	
				<span id="regError"></span>						
			</div>
			
			<div class="col-md-1">
				<div class="btns">
				<!-- <button class="btn" type="button" onclick="searchReg()"><i class="fa fa-search"></i></button> -->
			</div>
			</div>

		</div>


		<div class="col-md-7">
			<div class="col-md-3">
				<label>Class Roll No</label>					
			</div>

			<div class="col-md-9">
				<input type="text" name="class_roll_no" class="form-control" value="{{old('class_roll_no')}}">				
			</div>

		</div>

	</div>

<div class="col-md-12 pad">
	<div class="col-md-10">
		<div class="col-md-12">

			<div class="col-md-3">
				<label>Admission To Class</label>
			</div>

			<div class="col-md-3">
				<input type="text" class="form-control">	
			</div>

			<div class="col-md-2">
				<label>Current Class</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control">
			</div>
		</div>
		
		<div class="col-md-12" style="margin-top: 10px;">

			<div class="col-md-2">
				<label>Student Name</label>
			</div>

			<div class="col-md-3">
				<input type="text" class="form-control" name='student_name' value="{{old('student_name')}}" required="required">
			</div>
			<div class="col-md-2">
				<label>Gender</label>
			</div>

			<div class="col-md-4">

				<input type="radio" name="gender" value="male" required="required"> Male
				<input type="radio" name="gender" value="female" required="required"> Female	 			
			</div>
		</div>


	<div class="col-md-12" style="margin-top: 10px;">

			<div class="col-md-2">
				<label>Date of Birth</label>
			</div>

			<div class="col-md-3">
				<input type="text" class="form-control" name="birth_date" id="dt" value="" required="required">
			</div>

			<div class="col-md-1">
				<label>Age</label>
			</div>

			<div class="col-md-2">
				<input type="text" class="form-control" name="age" value="{{old('age')}}" id="age" >
			</div>


			<div class="col-md-2">
				<label>Blood Group</label>
			</div>

			<div class="col-md-2">
				<input type="text" class="form-control">
			</div>
		</div>

	
	 </div>

	<div class="col-md-2">
		<div>
				<img src="{{asset('public/images/user.jpg')}}" title="size 110 x 130" alt="size 110 x 130" style="width: 80%" id="imagePreview">

			</div>	
	</div>
</div>





<div class="clearfix"></div>
<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Home Address</label>
			</div>

			<div class="col-md-10">
				<input type="text" class="form-control" name="home_address" value="{{old('home_address')}}">
			</div>

</div>

<div class="col-md-12 margin">
			<div class="col-md-2">
				<label>Nationality</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="nationality" value="{{old('nationality')}}">				
			</div>



			<div class="col-md-2">
				<label>First Language</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="first_language" value="{{old('first_language')}}">

			</div>
</div>


<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Select Area \ Village</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control">
			</div>




			<div class="col-md-2">
				<label>Select House</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control">
			</div>

	</div>

<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Last School Attended</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="last_school" value="{{old('last_school')}}">				

			</div>




			<div class="col-md-2">
				<label>Reason for Leaving</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="leaving_reason" value="{{old('leaving_reason')}}">				

			</div>

	</div>


<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Health Issues</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="health_issues" value="{{old('health_issues')}}">				

			</div>




			<div class="col-md-2">
				<label>Hobbies / Interest</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="hobbies" value="{{old('hobbies')}}">				

			</div>

	</div>


<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Remedy</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="remedy" value="{{old('remedy')}}">				

			</div>




			<div class="col-md-2">
				<label>Religion</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="religion" value="{{old('religion')}}">				

			</div>

		</div>
	</div>
</div> <!-- registration ends -->

<div class="parent"> 
		<div class="row">	
		<div class="col-md-12 pad">
			<div class="col-md-9 pad">
				<div class="father"> 

<div class="col-md-12 margin ">

			<div class="col-md-2">
				<label>Father Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_name" required="required" value="{{old('father_name')}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_occupation" value="{{old('father_occupation')}}">				

			</div>

	</div>

<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Father CNIC No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="father_cnic" value="{{old('father_cnic')}}">				

			</div>




			<div class="col-md-2">
				<label>Education</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control">
			</div>
	</div>
</div>
<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Mother Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_name" value="{{old('mother_name')}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_occupation" value="{{old('mother_occupation')}}">				

			</div>



	</div>


<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Form B No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="mother_form_b" value="{{old('mother_form_b')}}">				

			</div>




			<div class="col-md-2">
				<label>Education</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control">

			</div>

	</div>

<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Guardian Name</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_name" value="{{old('guardian_name')}}">				

			</div>




			<div class="col-md-2">
				<label>Occupation</label>
			</div>

			<div class="col-md-4">

				<input type="text" class="form-control" name="guardian_occupation" value="{{old('guardian_occupation')}}">				
			</div>

	</div>


<div class="col-md-12 margin">

			<div class="col-md-2">
				<label>Guardian CNIC No</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_cnic" value="{{old('guardian_cnic')}}">				

			</div>




			<div class="col-md-2">
				<label>Remarks</label>
			</div>

			<div class="col-md-4">
				<input type="text" class="form-control" name="guardian_remarks" value="{{old('guardian_remarks')}}" >				
			</div>


				</div>
	</div>

			<div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">

					
					<h5 class="text">Contact Information</h5>					
				<div class="col-md-12">
					<div class="col-md-4">
						<label>Res Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="res_phone" min="11" value="{{old('res_phone')}}">				
					</div>

				</div>

				<div class="col-md-12">
					<div class="col-md-4">
						<label>Father Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="father_phone" min="11" value="{{old('father_phone')}}">				
					</div>

				</div>

				<div class="col-md-12">
					<div class="col-md-4">
						<label>Mother Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="mother_phone" min="11" value="{{old('mother_phone')}}">				
					</div>

				</div>


				<div class="col-md-12">
					<div class="col-md-4">
						<label>Guardian Phone</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="guardian_phone" min="11" value="{{old('guardian_phone')}}">				
					</div>

				</div>


				<div class="col-md-12">
					<div class="col-md-4">
						<label>Parent Email</label>	
					</div>

					<div class="col-md-8">	
						<input type="text" class="form-control" name="parent_email" value="{{old('parent_email')}}">				
					</div>

				</div>

			<div class="col-md-12">
				<div >

				<div class="col-md-6">
					@if(old('photographs')=='yes')
					<input type="checkbox" value="yes" name="photographs" checked="checked"><span>Photographs</span>
					@else
					<input type="checkbox" value="yes" name="photographs"><span>Photographs</span>
					@endif
				</div>

				<div class="col-md-6">
					@if(old('father_nic')=='yes')
					<input type="checkbox" value="yes" name="father_nic" checked="checked"><span>Father's NIC</span>
					@else
					<input type="checkbox" value="yes" name="father_nic"><span>Father's NIC</span>	
					@endif				
				</div>

				<div class="col-md-12">
					@if(old('form_b')=='yes')
					<input type="checkbox" value="yes" name="form_b" checked="checked"><span>Form B / Birth Certificate</span>
					@else
					<input type="checkbox" value="yes" name="form_b"><span>Form B / Birth Certificate</span>					
					@endif
				</div>

				<div class="col-md-12">
					@if(old('school_leaving')=='yes')
					<input type="checkbox" value="yes" name="school_leaving" checked="checked"><span>School Leaving Certificate</span>
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
		<div class="col-md-12 margin">

					<div class="col-md-2">
						<label>Monthly Fee</label>	
					</div>

					<div class="col-md-2">	
						@if(old('monthly_fee'))
						<input type="text" class="form-control" id="monthly_fee" name="monthly_fee" value="{{old('discount')}}" onkeyup="getAmnt(this)">				
						@else
						<input type="text" class="form-control" id="monthly_fee" name="monthly_fee" value="0" onkeyup="getAmnt(this)">				
						@endif
					</div>

					<div class="col-md-2">	
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="25"><span>25 %</span>
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="50"><span>50 %</span>						
						<input type="radio" onclick='getDiscount(this)' name="discount_percent" value="other" ><span>Other</span>												
					</div>

					<div class="col-md-2">
						<label>Discount %age</label>	
					</div>

					<div class="col-md-1">	
						@if(old('discount'))
	
						<input type="text" class="form-control" name="discount" value="{{old('discount')}}" id="discount" onkeyup="getOtherDis(this)">					
							@else

						<input type="text" class="form-control" name="discount" value="0" id="discount" onkeyup="getOtherDis(this)">
						@endif

 				
					</div>


					<div class="col-md-1">
						<label>Net Fee</label>	
					</div>

					<div class="col-md-2">

						@if(old('net_fee'))
	
						<input type="text" id="net_fee"  class="form-control" name="net_fee" value="{{old('net_fee')}}" >				
							@else
						<input type="text" id="net_fee"  class="form-control" name="net_fee" value="0" >				
						@endif


					</div>


				</div>	


				<div class="col-md-12 margin">

					<div class="col-md-2">
						@if(old('transport')=='yes')
						
						<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>
					@else
							
						<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>		
					@endif	

					</div>

					<div class="col-md-2">	
						@if(old('transport_amnt')=='yes')
						
					
						<input type="text" name="transport_amnt" class="form-control" value="{{old('transport_amnt')}}"  id="transport_amnt">

					@else
							
						
						<input type="text" name="transport_amnt" class="form-control" value="0"  id="transport_amnt">
					@endif	
						</div>

					<div class="col-md-2">	
						<label>Select Van</label>
					</div>

					<div class="col-md-2">
					<input type="text" class="form-control">
					</div>

					<div class="col-md-1">	
						<label>Route</label>
					</div>

					<div class="col-md-3">	

						<input type="text" class="form-control">				
					</div>


				</div>					

				<div class="col-md-12 margin">

					<div class="col-md-2">
						<label>Security Deposit</label>
					</div>

					<div class="col-md-2">	
						@if(old('route'))
						<input type="text" name="security_deposit" class="form-control" value="{{old('security_deposit')}}">
						@else
						<input type="text" name="security_deposit" class="form-control" value="0">
						@endif								

					</div>

					<div class="col-md-2">
						@if(old('security_refunded')=='yes')
						<input type="checkbox" value="yes" name="security_refunded" checked="checked" ><span>Security Refunded</span>
						@else
						<input type="checkbox" value="yes" name="security_refunded" ><span>Security Refunded</span>
						@endif

					</div>

					<div class="col-md-2">
						<label>Admission Paid</label>	
					</div>

					<div class="col-md-2">	
						@if(old('admission_paid'))
						<input type="text" name="admission_paid" class="form-control" value="{{old('admission_paid')}}">
						@else
						<input type="text" class="form-control" name="admission_paid" value="0">				
						@endif							

					</div>

					
					<div class="col-md-1">	
						<label>Arrears</label>
					</div>

					<div class="col-md-1">
					@if(old('arrears'))
						<input type="text" name="arrears" class="form-control" value="{{old('arrears')}}">
						@else
							<input type="text" class="form-control" name="arrears" value="0">				
						@endif	
									
					</div>

			</div>		
			</div>			
</div> <!-- fee ends -->

<div class="preschool">
	<div class="row">
				<div class="col-md-12 margin">
					<div class="col-md-2">

						@if(old('left_school')=='yes')
						<input type="checkbox" value="yes" name="left_school" onclick="getLeftSchool(this)"><span>Left School</span>						
						@else
						<input type="checkbox" value="yes" name="left_school" onclick="getLeftSchool(this)"><span>Left School</span>						
						@endif		
				
					</div>

					<div class="col-md-10">
						<label>Reason to Leave</label>
					</div>					

					<div class="col-md-2">
						<input type="text" class="form-control">						
					</div>

					<div class="col-md-10">
						<input type="text" class="form-control">						
					</div>										
			</div>
	</div>	
</div>


<div class="errors">
	<div class="row">
		<div class="col-md-12">
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

<script type="text/javascript">


    function Myprint()
    {
    	$('.btns').hide();	
  var prtContent = document.getElementById("print");
    var WinPrint = window.open('', '', 'left=0,top=0,width=1350,height=780,toolbar=0,scrollbars=0,status=0');

setTimeout(function(){ 
    WinPrint.document.write('<link rel="stylesheet"media="screen,print"  href="{{asset("public/bower_components/bootstrap/dist/css/bootstrap.min.css")}}"><link media="screen,print" rel="stylesheet" href="{{asset("public/bower_components/font-awesome/css/font-awesome.min.css")}}"><link media="screen,print" rel="stylesheet" href="{{asset("public/css/print.css")}}">');
    WinPrint.document.write('<div>'+prtContent.innerHTML+'</div>');

 }, 3000);

setTimeout(function(){ 

    WinPrint.focus();
    WinPrint.print();
 }, 5000);


    WinPrint.document.close();  

    //WinPrint.close();

    }
setTimeout(function(){ 

Myprint();
 }, 2000);


</script>
@include('templates.admin.adminJS')
@endsection