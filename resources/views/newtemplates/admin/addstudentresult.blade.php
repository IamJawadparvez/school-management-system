@extends('newtemplates.default')
@section('content')
<style type="text/css">
	.margin{
		padding: 3px;
		margin-top: 2%;
	}
	.input{
		border-radius: 5px;
	}
</style>
	<div class="row">
		<div class="col-md-12">
		
<form method="POST" action="{{url('admin.addteacher')}}">
	@csrf

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-3 col-43">
				<div class="form-group">
			<label>Student Id</label>
		
			<input type="text" value="{{$addresult->id}}" class="form-control input" readonly="readonly" >
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Student Name</label>
		
			<input type="text" name="name" value="{{$addresult->name}}" class="form-control input" readonly>
		</div>
				
			</div>



			<div class="col-lg-3 col-3">
				<div class="form-group">
			<label>Class ID</label>
		
			<input type="text" name="class_id" value="{{$student->class_id}}" class="form-control input" readonly>
			</div>
			</div>
			
		</div>

		
		

	</div>



	<div class="col-md-12 margin">
		<div class="row">

			

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Subject Name</label>
		
			<input type="text" name="name" value="" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
		

	</div>



	<!-- <div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Mobile No</label>
		
			<input type="text" name="phone" value="" class="form-control input" >
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Address</label>
		
			<input type="text" name="address" value="" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
		

	</div> -->





<!-- 

		<div class="col-md-12 margin">
			<div class="row">

			<div class="col-lg-5 col-5">
					<div class="form-group">
						<label>Gender</label>
						<select name="gender" class="form-control" required="required">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select>
					</div>
			  </div>
				<div class="col-lg-5 col-5">

					<div class="form-group">
						<label>Experience</label>
						<input type="text" name="experience" value="" class="form-control input" required="required">
					</div>
			     </div>
				
			</div>	
		 </div> -->

	

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Save"  class="btn btn-success" >	

	


		<a href="{{url('admin.allteacher')}}"  value="Exit" class="btn btn-danger">	
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
@include('newtemplates.admin.adminJS')
@endsection