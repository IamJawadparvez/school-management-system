@extends('templates.default')
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

		<div class="col-md-2">
			<label>Teacher Name</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="name" value="{{$teacher->name}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>CNIC</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="nic" value="{{$teacher->nic}}" class="form-control input" required="required">
		</div>

	</div>

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Email</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
		</div>
		
		 <div class="col-md-9">
			<input type="text" name="email"  value="{{$teacher->email}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Qualification</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="qualification" value="{{($teacher->teacherDetail)? $teacher->teacherDetail->qualification :''}}" class="form-control input" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Mobile no</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="phone" value="{{$teacher->phone}}" class="form-control input">
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Address</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="address" value="{{$teacher->address}}" class="form-control input" >
		</div>

	</div>

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Gender</label>
		</div>
		
		<div class="col-md-9">
			<select name="gender" value="<?php if($teacher->gender=='male')echo"selected='selected'";?>" class="form-control" required="required">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
			
		</select>
		</div>
		
		
		
		

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Experience</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" type="text" name="experience" value="{{($teacher->teacherDetail)?$teacher->teacherDetail->experience:''}}" class="form-control input" ></textarea>
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
@include('templates.admin.adminJS')
@endsection