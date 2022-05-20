@extends('templates.default')
@section('content')
<div class="col-md-12">
		<a href="{{route('admin.addschool')}}" class="btn btn-success">Add School</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>			
			<th>UserName</th>						
			<th>Phone No</th>
			<th>Email</th>						
			<th>Role</th>						
			<th>Actions</th>
			<th>Khan</th>

		</tr>
	</thead>
	<?php $i=1 ?>
	<tbody>
		@foreach($users as $u)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$u->name}}</td>			
				<td>{{$u->username}}</td>						
				<td>{{$u->phone_no}}</td>
				<td>{{$u->email}}</td>						
				<td>{{$u->roles[0]->name}}</td>		
				<td>
				</td>													
			</tr>
		@endforeach		
	</tbody>
</table>
@endsection