@extends('templates.default')
@section('content')
<div class="row" id="row">
<div class="col-md-12">
<label>Show</label>



  <select onchange="ShowEntries()" id="show_entry" name="show_entry">
       @if(isset($num))
      <option value="{{$num}}">{{$num}}</option>    
       @endif 

      <option value="1">10</option>
      <option value="25">25</option>  
      <option value="50">50</option>    
      <option value="100">100</option>      
  </select>


<label>entries</label>
		<a href="{{route('admin.addteacher')}}" class="btn btn-success" >Add Teacher</a>
			

</div>

<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
      <th></th>
			<th>#</th>			
			<th>Name</th>
			<th>CNIC</th>												
      <th>Email</th>                              
      <th>Gender</th>
      <th>Qualification</th>   
      <th>Experience</th>  
      <th>Phone</th>
      <th>Address</th>                               

		</tr>
	</thead>



	<tbody id="myTable">
     @foreach($teachers as $teach)

      <tr>
        <td>
           
          <a href="{{route('admin.editteacher',['id'=>$teach->id])}}" style="font-size: 17px;">
            <i class="fa fa-edit"></i>
          </a>

           

          <a href="{{route('admin.deleteteacher',$teach->id)}}" style="font-size: 17px;">
            <i class="fa fa-trash"></i>
          </a>
         
         </td> 
         <td></td>
         <td>{{$teach->name}}</td>
        <td>{{$teach->nic}}</td>
        <td>{{$teach->email}}</td> 
        <td>{{$teach->gender}}</td>  
        <td>@if($teach->teacherDetail)
          {{$teach->teacherDetail->qualification}}
          @endif
        </td> 
        <td>@if($teach->teacherDetail)
          {{$teach->teacherDetail->experience}}
          @endif
        </td>   
     <td>{{$teach->phone}}</td>
      <td>{{$teach->address}}</td>

        
      </tr>
     
      

      @endforeach

	
	</tbody>
</table>

</form>

  </div>
</div>

</div>













@include('templates.admin.adminJS')
@endsection