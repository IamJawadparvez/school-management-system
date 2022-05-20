@extends('templates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addClass">Add Route</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Route</th>

			<th>Action</th>  
		</tr>
	</thead>
	<?php $i=1 ?>
	<tbody>
		@foreach($vanroutes as $vr)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$vr->name}}</td>			
        <td>
          <a href="#" data-toggle="modal" data-target="#editVan" data-id='{{$vr->id}}' data-name='{{$vr->name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>
          @if($vr->VansRoute->count() > 0)

          @else
          <a href="{{route('admin.deleteVanRoute',['id'=>$vr->id])}}"><i class="fa fa-trash"></i></a>         
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
      		<form method="POST" action="{{route('admin.addroute')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Route</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="route">
      			<input type="hidden" class="form-control" name="van_id" value="{{$id}}">      			


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
          <form method="POST" action="{{route('admin.editroute')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Route</h4>
      </div>
      <div class="modal-body">

            @csrf
            <input type="text" class="form-control" name="route" id="route">
            <input type="hidden" class="form-control" name="id" id="id">            


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
  $('#route').val(name);

}
</script>

@endsection