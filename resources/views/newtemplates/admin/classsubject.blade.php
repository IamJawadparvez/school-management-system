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
		
<form method="POST" action="{{route('admin.insertsubject')}}">
	@csrf
	
	
	
<div class="col-md-12 margin">
		
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Class Name</label>
		
			<input type="text" name="name" value="{{$class->name}}" class="form-control input">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Section</label>
		
			<select name="subject_name[]" class="form-control" required="required" multiple="">
				@foreach($subject as $sb)
		<option value="{{$sb->id}}">{{$sb->subject_name}}</option>
		@endforeach
	</select>
		     </div>
				
			</div>



<div class="col-lg-5 col-5">
				<div class="form-group">
		
		
			<input type="hidden" name="id" value="{{$class->id}}" class="form-control input">
			</div>
			</div>



			
		</div>
	</div>
	

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Update"  class="btn btn-success" style="margin-left:300px; margin-bottom: 5%">	

	


		<a href="{{route('admin.class')}}" class="btn btn-danger" style="margin-bottom: 5%;"> Ignore & Exit</a> 
	</center>
	</div>
</form>


</div>
</div>
@include('newtemplates.admin.adminJS')
@endsection