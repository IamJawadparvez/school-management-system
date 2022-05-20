@extends('newtemplates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addresult" style="margin-top: 2%;">Add Result</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Result</th>
			<th>Actions</th>												
		</tr>
	</thead>

  <tbody>
    @foreach($result as $res)
    <tr>
      <td>{{$res->id}}</td>
      <td>{{$res->name}}</td>
      <td>
        <a href="" data-toggle="modal" data-target="#editresult"  data-id='{{$res->id}}' data-name='{{$res->name}}'onclick="editForm(this)" ><i class="fa fa-edit"></i></a>
        <a href="{{route('admin.deleteresult',['id'=>$res->id])}}"><i class="fa fa-trash"></i></a>
      </td>
    </tr>




</tbody>
    @endforeach
      

	</table>

<!-- Modal -->
<div id="addresult" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addresult')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Result</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="name">


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
<div id="editresult" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editresult')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Result</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="name" id="name">
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
	$('#name').val(name);

}

</script>

@endsection