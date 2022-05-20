@extends('newtemplates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addSection" style="margin-top: 2%;">Add Subjects</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Subject Name</th>
			<th>Actions</th>												
		</tr>
	</thead>

  <tbody>

@foreach($sub as $sb)
    <td>{{$sb->id}}</td>
    <td>{{$sb->subject_name}}</td>
    <td>
      <a href="" data-toggle="modal" data-target="#editsubject" data-id='{{$sb->id}}' data-name='{{$sb->subject_name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>







       <a href="{{route('admin.deletesubject',['id'=>$sb->id])}}"><i class="fa fa-trash"></i></a>
    </td>

     

 </tbody>
    @endforeach
	</table>

<!-- Modal -->
<div id="addSection" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addsubject')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Subjects</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="subject_name">


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
<div id="editsubject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editsubject')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Subjects</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="subject_name" id="subject_name">
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
	$('#subject_name').val(name);

}

</script>

@endsection