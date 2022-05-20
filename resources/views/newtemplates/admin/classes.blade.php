@extends('newtemplates.default')
@section('content')
<div class="col-md-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#addClass" style="margin-top: 2%;">Add Class</a>
</div>
<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
			<th>Class</th>
			<th>Actions</th>			
        <th>Section</th> 
        <th>Subjects</th> 									
		</tr>
	</thead>
<!-- 	<?php $i=1 ?> -->
	<tbody>
		@foreach($class as $sc)
			<tr>
				<!-- <td>{{$i++}}</td> -->
          <td>{{$sc->id}}</td>  
				<td>{{$sc->name}}</td>			

				<td>
					<a href="#" data-toggle="modal" data-target="#editClass" data-id='{{$sc->id}}' data-name='{{$sc->name}}' onclick="editForm(this)"><i class="fa fa-edit"></i></a>
					@if($sc->totalClass->count() > 0)

					@else
					<a href="{{route('admin.deleteClass',['id'=>$sc->id])}}"><i class="fa fa-trash"></i></a>
      					
					@endif


				</td>	
        <td>
           <a href="{{route('admin.section_class',['id'=>$sc->id])}}"><i class="fa fa-eye"></i></a> 
        </td>	


        <td>
           <a href="{{route('admin.class_subject',['id'=>$sc->id])}}"><i class="fa fa-eye"></i></a>



        </td>											
			</tr>
		@endforeach		
	</tbody>
</table>

<!-- Modal -->
<div id="addClass" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.addclass')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Add Class</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="class">


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
<div id="editClass" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      		<form method="POST" action="{{route('admin.editclass')}}">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="position: absolute;">Edit Class</h4>
      </div>
      <div class="modal-body">

      			@csrf
      			<input type="text" class="form-control" name="class" id="className">
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
	$('#className').val(name);

}

</script>

@endsection