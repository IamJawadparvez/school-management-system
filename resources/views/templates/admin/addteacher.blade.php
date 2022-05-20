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
		
<form method="POST" action="{{route('admin.addteacher')}}">
	@csrf
	<div class="col-md-12 margin">

		<div class="col-md-2">
			<label>Teacher Name</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="name" value="" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>CNIC</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="nic" value="" class="form-control input" required="required">
		</div>

	</div>

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Email</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
		</div>
		
		 <div class="col-md-9">
			<input type="text" name="email" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Qualification</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="qualification" value="" class="form-control input" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Mobile no</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="phone" value="" class="form-control input" >
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Address</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="address" value="" class="form-control input" >
		</div>

	</div>

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Gender</label>
		</div>
		
		<div class="col-md-9">
			<select name="gender" class="form-control" required="required">
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
			<textarea type="text" name="experience" value="" class="form-control input" ></textarea>
		</div>

	</div>

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Save"  class="btn btn-success" style="margin-right: 80px;">	

	


		<a href="{{route('admin.allteacher')}}" class="btn btn-danger" style="margin-right: 80px;">	
		Ignore & Exit</a>
	</center>
	</div>
</form>


</div>
</div>
<!-- <script type="text/javascript">
	function checkFunc(x)
	{
		$('#action').val(x);
	}
</script> -->
@include('templates.admin.adminJS')
@endsection