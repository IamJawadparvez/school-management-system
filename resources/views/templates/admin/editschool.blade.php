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
<form method="POST" action="{{route('admin.post.editschool',['uid'=>$school->id])}}">
	@csrf
	<div class="col-md-12 margin">

		<div class="col-md-2">
			<label>School Name</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="name" value="{{old('name')}} {{$school->name}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Owner Name</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="owner_name" value="{{old('owner_name')}} {{$school->owner_name}}" class="form-control input" required="required">
		</div>

	</div>

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Owner Username</label><span style="margin-left: 5px;"><i class="fa fa-question-circle" title="This Username will be used for login" aria-hidden="true"></i>
</span>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="username" value="{{old('username')}} {{$school->name}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Phone no</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="phone_no" value="{{old('phone_no')}} {{$school->phone_no}}" class="form-control input" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Mobile no</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="mobile" value="{{old('mobile')}} {{$school->mobile}}" class="form-control input" >
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Email</label>
		</div>
		<input type="hidden" name="user_email" value="{{$school->email}}">
		<div class="col-md-9">
			<input type="text" name="email" value="{{old('email')}} {{$school->email}}" class="form-control input" >
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Address</label>
		</div>
		
		<div class="col-md-9">
			<textarea type="text" name="address" value="{{old('address')}} {{$school->address}}" class="form-control input" >{{$school->address}}</textarea>
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