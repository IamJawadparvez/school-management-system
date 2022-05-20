@extends('newtemplates.default')
@section('content')
<div class="row" id="row">
<div class="col-md-12">
<label>Show</label>



  <select onchange="ShowEntries()" id="show_entry" name="show_entry" style="margin-top: 2%;">
       @if(isset($num))
      <option value="{{$num}}">{{$num}}</option>    
       @endif 

      <option value="1">10</option>
      <option value="25">25</option>  
      <option value="50">50</option>    
      <option value="100">100</option>      
  </select>


<label>entries</label>
		<a href="{{route('admin.admissionForm')}}" class="btn btn-success" >Add Student</a>
		<a href="#" data-toggle="modal" data-target="#import" class="btn btn-success" >Import From Excel</a>		
<input class="form-control pull-right" id="myInput" type="text" placeholder="Search.." style="width: 30%; margin-top: 1%;">
</div>

<table class="table table-bordered table-striped" style="margin-top: 4%; margin-left: 4%;">
	<thead>
		<tr>
   
			<th>#</th>
			<th>Registration #</th>			
			<th>Student Name</th>
			<th>Date of Birth</th>												
      <th>Gender</th>                              
      <th>Address</th>  
      <th>Action</th>
      <th>Status</th>                                  

		</tr>
	</thead>
	<?php $i=0 ?>
	<tbody id="myTable">
		@foreach($users as $s)

			<tr>
                  
				<!-- <td>{{++$i}}</td> -->
						<th>{{$s->id}}</th>
       <td>@if($s->Registration)
          {{$s->Registration->registration_no}}
          @endif
        </td> 	
				<td>{{$s->name}}</td>			
        		<td>{{$s->dob}}</td>     
        		<td>{{$s->gender}}</td>     
        		<td>@if($s->students)
          {{$s->students->home_address}}
          @endif
        </td>

<td>
           <a href="{{route('admin.studentfee',['id'=>$s->id])}}" style="font-size: 17px;">
            <i class="fa fa-edit"></i>
          </a>
          <a href="{{route('admin.editStudent',['id'=>$s->id])}}" style="font-size: 17px;">
            <i class="fa fa-edit"></i>
          </a>

           <a href="{{route('admin.ViewForm',['id'=>$s->id])}}" target="_blank" style="font-size: 17px;">
            <i class="fa fa-print"></i>
          </a>

          <a href="{{route('admin.studentfee.delete',['id'=>$s->id])}}" style="font-size: 17px;">
            <i class="fa fa-trash"></i>
          </a>
         
         </td> 

        




          <td>
    <!--       <label>
                <input mbsc-switch type="checkbox">
            </label> -->
           
           <a href="{{route('admin.addstudentresult',['id'=>$s->id])}}"><i class="fa fa-eye"></i></a>
         </td>
        



         
			</tr>
		@endforeach		
	</tbody>
</table>
{{$users->links()}}
<!-- Modal -->
<div id="import" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <form method="POST" action="{{route('admin.import')}}" enctype="multipart/form-data">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import from Excel</h4>
      </div>
      <div class="modal-body">

      		@csrf
      		<input type="file" name="excel" required="required"> 

      
      </div>
      <div class="modal-footer">
		<input type="submit" name="submit" class="btn btn-success">      	
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>

  </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>

    // Use the settings object to change the theme
    mobiscroll.settings = {
        theme: 'ios',           // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light',  // More info about themeVariant: https://docs.mobiscroll.com/4-10-7/javascript/forms#opt-themeVariant
        lang: 'en'              // Specify language like: lang: 'pl' or omit setting to use default
    };
</script>
</div>













@include('newtemplates.admin.adminJS')
@include('newtemplates.partials.footer')
@endsection