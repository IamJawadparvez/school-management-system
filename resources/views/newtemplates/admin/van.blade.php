@extends('newtemplates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addClass" style="margin-top: 2%">Add Van</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Van</th>												
			<th>Action</th>															
		</tr>
	</thead>
	<?php $i=1 ?>
	<tbody>
		@foreach($vans as $v)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$v->name}}</td>			

				<td>
					<a href="{{route('admin.viewroute',['id'=>$v->id])}}"><i class="fa fa-road"></i> </a>

					<a href="#" data-toggle="modal" data-target="#editVan" data-id='{{$v->id}}' data-name='{{$v->name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>
					@if($v->Vans->count() > 0)

					@else
					<a href="{{route('admin.deleteVan',['id'=>$v->id])}}"><i class="fa fa-trash"></i></a>					
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
      		<form method="POST" action="{{route('admin.addvan')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Van</h4>
        <!-- <h4 class="modal-title">Add Van</h4> -->
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="van">


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
<div id="editVan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editvan')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Van</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="van" id="van">
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
	$('#van').val(name);

}
</script>

@endsection