@extends('templates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addArea">Add Area</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Area</th>
			<th>Actions</th>												
		</tr>
	</thead>
	<?php $i=0 ?>
	<tbody>
		@foreach($areas as $a)
			<tr>
				<td>{{++$i}}</td>
				<td>{{$a->name}}</td>			

				<td>
					<a href="#" data-toggle="modal" data-target="#editArea" data-id='{{$a->id}}' data-name='{{$a->name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>
					@if($a->Area->count() > 0)

					@else
					<a href="{{route('admin.deleteArea',['id'=>$a->id])}}" ><i class="fa fa-trash"></i></a>					
					@endif

				</td>													
			</tr>
		@endforeach		
	</tbody>
</table>

<!-- Modal -->
<div id="addArea" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addarea')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Area</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="area" >


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
</form>

  </div>
</div>

<!-- Modal -->
<div id="editArea" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editarea')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Area</h4>
      </div>
      <div class="modal-body">

      	@csrf
      	<input type="text" class="form-control" name="area" id="areaName">
      	<input type="hidden" name="id" id="id">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
</form>

  </div>
</div>

<script type="text/javascript">
	
function editForm(aid)
{
	id = $(aid).data("id");
	name = $(aid).data("name");	

	$('#id').val(id);
	$('#areaName').val(name);
	
}

</script>
@endsection