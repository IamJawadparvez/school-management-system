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
			<th>Owner Name</th>						
			<th>Phone No</th>
			<th>Mobile No</th>									
			<th>Email</th>						
			<th>Address</th>									
			<th>Actions</th>												
		</tr>
	</thead>
	<?php $i=1 ?>
	<tbody>
		@foreach($school as $sc)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$sc->name}}</td>			
				<td>{{$sc->owner_name}}</td>						
				<td>{{$sc->phone_no}}</td>
				<td>{{$sc->mobile}}</td>									
				<td>{{$sc->email}}</td>						
				<td>{{$sc->address}}</td>									
				<td><a href="{{route('admin.add_user',['id'=>$sc->id])}}"><i class="fa fa-user" title="add user"></i></a>

					<a href="{{route('admin.editschool',['id'=>$sc->id])}}"><i class="fa fa-edit" title="edit school"></i></a>

					<a href="{{route('admin.deleteschool',['id'=>$sc->id])}}"><i class="fa fa-times" title="delete school"></i></a>

					<a href="{{route('admin.viewusers',['id'=>$sc->id])}}"><i class="fa fa-users" title="view school roles"></i></a>

				</td>													
			</tr>
		@endforeach		
	</tbody>
</table>
@endsection