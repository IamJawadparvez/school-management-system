@extends('templates.default')
@section('content')
<div class="col-md-12">
		<a href="{{route('admin.admissionForm')}}" class="btn btn-success" >Add Student</a>
		<a href="{{route('admin.import')}}" class="btn btn-success" >Import From Excel</a>		
</div>

<div class="col-md-12" style="overflow-x: auto;">
	<form method="POST" action="{{route('admin.Saveimport',['tdatasize'=>sizeof($tdata)])}}">
		@csrf
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead style="background-color: #3c8dbc;color: white;font-weight: bold">
		<tr>
	<?php $i=1; ?>			
		@foreach($all as $a)
			<td>{{$a}}
				<input type="hidden" name="row{{$i}}" value="{{$a}}">
				<select style="color: black" name='col{{$i}}' class="selectpicker" data-live-search="true">
<option value=""></option>					
					@foreach($students as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="students-{{$std}}">{{$std}}</option>
			@endif
		@endforeach
		
		@foreach($std_parents as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="std_parents-{{$std}}">{{$std}}</option>
			@endif
		@endforeach

		@foreach($std_pre_school as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="std_pre_school-{{$std}}">{{$std}}</option>
			@endif
		@endforeach
		
		@foreach($student_document as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="student_document-{{$std}}">{{$std}}</option>
			@endif
		@endforeach

		@foreach($student_fee as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="student_fee-{{$std}}">{{$std}}</option>
			@endif
		@endforeach

		@foreach($student_guardian as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="student_guardian-{{$std}}">{{$std}}</option>
			@endif
		@endforeach		

		@foreach($student_image as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="student_image-{{$std}}">{{$std}}</option>
			@endif
		@endforeach				

		@foreach($student_registration as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="student_registration-{{$std}}">{{$std}}</option>
			@endif
		@endforeach
		
		@foreach($left_school as $std)
			@if($std != 'created_at' && $std!='updated_at')
				<option value="left_school-{{$std}}">{{$std}}</option>
			@endif
		@endforeach


				</select>



			</td>


		<?php $i++ ?>				
		@endforeach


		</tr>
	</thead>

	<tbody>
		<?php $r=1;?>
		 @foreach($tdata as $v)
		  <?php $c = 1 ?>
			<tr>
			 @foreach($v as $vt)
			  <td>{{$vt}}<input type="hidden" name="tdata{{$r.$c}}" value="{{$vt}}"></td>
			  <?php $c++ ?>	
			  @endforeach
			   </tr>
			 <?php $r++ ?>															
		@endforeach
	</tbody>
</table>
<input type="hidden" name="colno" value="{{$i}}">
<input type="submit" name="submit" value="Save" class="btn btn-success">
</form>

</div>
<script type="text/javascript">
$(document).ready(
    function () {
$('.selectpicker').selectpicker(); 
    });


	

</script>
@endsection