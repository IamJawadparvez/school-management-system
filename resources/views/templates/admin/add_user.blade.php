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
<form method="POST" action="{{route('admin.post.addschooluser')}}">
	@csrf
	<div class="col-md-12 margin">

		<div class="col-md-2">
			<label>Name</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="name" value="{{old('name')}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>UserName</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="username" value="{{old('username')}}" class="form-control input" required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Phone no</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="phone_no" value="{{old('phone_no')}}" class="form-control input"  required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Email</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="email" value="{{old('email')}}" class="form-control input"  required="required">
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Password</label>
		</div>
		
		<div class="col-md-9">
			<input type="password" name="password" value="{{old('password')}}" class="form-control input" required="required" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Select Role</label>
		</div>
		
		<div class="col-md-9">
			<select class="form-control" name="user_role">
				@foreach($roles as $role)
					@if($role->slug!='admin' && $role->slug!='owner')
					<option value="{{$role->id}}">{{$role->name}}</option>
					@endif	
				@endforeach
			</select>
		</div>

	</div>
<input type="hidden" name="school_id" value="{{$id}}">

	<div class="col-md-12">
		<input type="submit" name="submit" value="Submit" class="btn btn-success pull-right" style="margin-right: 80px;">	
	</div>
</form>
@endsection