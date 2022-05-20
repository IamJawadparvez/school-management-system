@extends('newtemplates.default')
@section('content')
<style type="text/css">
	.margin{
		padding: 3px;
	}
	.input{
		border-radius: 5px;
	}
</style>
	<div class="row">
		<div class="col-md-12">
		
<form method="POST" action="{{route('admin.post.editStudentfee',$teacher->id)}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Teacher Name</label>
		
			<input type="text" name="name" value="{{$teacher->name}}" class="form-control input" >
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>CNIC</label>
		
			<input type="text" name="nic" value="{{$teacher->nic}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
		

	</div>





	<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Email</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
		
			<input type="text" name="email" value="{{$teacher->email}}" class="form-control input" >
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Qualiification</label>
		
			<input type="text" name="qualification" value="{{($teacher->teacherDetail)? $teacher->teacherDetail->qualification :''}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
		

	</div>






	<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Mobile No</label>
		
			<input type="text" name="phone" value="{{$teacher->phone}}" class="form-control input" >
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Address</label>
		
			<input type="text" name="address" value="{{$teacher->address}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		

	</div>

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Gender</label>
			<select name="gender" value="<?php if($teacher->gender=='male')echo"selected='selected'";?>" class="form-control" required="required">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
			
		</select>
		
			
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Experience</label>
		
			<input type="text" name="address" value="{{($teacher->teacherDetail)?$teacher->teacherDetail->experience:''}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		

	</div>



<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Update"  class="btn btn-success" style="margin-right: 80px;">	

	


		<a href="{{route('admin.allteacher')}}" class="btn btn-danger" style="margin-right: 80px;">	
		Ignore & Exit</a>
	</center>
	</div>
</form>


</div>
</div>
@include('newtemplates.admin.adminJS')
@endsection