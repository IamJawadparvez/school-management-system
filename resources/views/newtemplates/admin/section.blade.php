@extends('newtemplates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addSection" style="margin-top: 2%;">Add Section</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Section Name</th>
			<th>Actions</th>												
		</tr>
	</thead>
  <?php $i=1 ?>
  <tbody>
    @foreach($section as $sec)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$sec->section_name}}</td>      
        <td>
          <a href="" data-toggle="modal" data-target="#editSection"  data-id='{{$sec->id}}' data-name='{{$sec->section_name}}'onclick="editForm(this)" ><i class="fa fa-edit"></i></a>

            <a href="{{route('admin.deletesection',['id'=>$sec->id])}}"><i class="fa fa-trash"></i></a>  


        </td>
      </tr>
    @endforeach   

	</table>

<!-- Modal -->
<div id="addSection" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addsection')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Section</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="section_name">


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
<div id="editSection" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editsection')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Section</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="section_name" id="section_name">
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
	$('#section_name').val(name);

}

</script>

@endsection