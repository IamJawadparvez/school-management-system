@extends('templates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addClass">Add House</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>House</th>
		<th>Actions</th>															
		</tr>
	</thead>
	<?php $i=1 ?>
	<tbody>
		@foreach($houses as $h)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$h->name}}</td>			

				<td>

					<a href="#" data-toggle="modal" data-target="#editHouse" data-id='{{$h->id}}' data-name='{{$h->name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>
					@if($h->House->count() > 0)

					@else
					<a href="{{route('admin.deleteHouse',['id'=>$h->id])}}"><i class="fa fa-trash"></i></a>					
					@endif


				</td>													
			</tr>
		@endforeach		
	</tbody>
</table>

<!-- Modal -->
<div id="addClass" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addhouse')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add House</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="house">


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
<div id="editHouse" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.edithouse')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit House</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="house" id="houseName">
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
	$('#id').val(id);
	
	name = $(aid).data("name");
	$('#houseName').val(name);

}
</script>
@endsection