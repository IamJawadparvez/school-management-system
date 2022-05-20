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
		
<form method="POST" action="{{route('admin.post.addschool')}}">
	@csrf

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>School Name</label>
		
			<input type="text" name="name" value="{{old('name')}}" class="form-control input" required="required">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Owner Name</label>
		
			<input type="text" name="owner_name" value="{{old('owner_name')}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
	</div>





<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Owner Username</label>
		
			<input type="text" name="username" value="{{old('username')}}" class="form-control input" required="required">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Phone No</label>
		
			<input type="text" name="phone_no" value="{{old('phone_no')}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
	</div>


<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Mobile No</label>
		
			<input type="text" name="mobile" value="{{old('mobile')}}" class="form-control input" required="required">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Email</label>
		
			<input type="text" name="email" value="{{old('email')}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
	</div>

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Password</label>
		
			<input type="text" name="password" value="{{old('password')}}" class="form-control input" required="required">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Address</label>
		
			<input type="text" name="address" value="{{old('address')}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
	</div>


	

	
<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Save" onclick="checkFunc(this.value)" class="btn btn-success" style="margin-right: 80px;">	

		<input type="submit" name="submit" value="Save & Exit" onclick="checkFunc(this.value)" class="btn btn-warning" style="margin-right: 80px;">	


		<a href="{{route('admin.schools')}}" class="btn btn-danger" style="margin-right: 80px;">	
		Ignore & Exit</a>
	</center>
	</div>
</form>


</div>
</div>
<script type="text/javascript">
	function checkFunc(x)
	{
		$('#action').val(x);
	}
</script>
@endsection