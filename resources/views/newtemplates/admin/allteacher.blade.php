@extends('newtemplates.default')
@section('content')
<div class="row" id="row" style="margin-left: 2%">
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
		<a href="{{route('admin.addteacher')}}" class="btn btn-success" >Add Teacher</a>
			

</div>

<table class="table table-bordered table-striped" style="margin-top: 2%;">
	<thead>
		<tr>
					<th></th>
			<th>Name</th>
			<th>CNIC</th>												
      <th>Email</th>                              
      <th>Gender</th>
      <th>Qualification</th>   
      <th>Experience</th>  
      <th>Phone</th>
      <th>Address</th>                               
      <th>Action</th>
		</tr>
	</thead>



	<tbody id="myTable">
     @foreach($teachers as $teach)

      <tr>
       
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
 <td>
           
          <a href="{{route('admin.editteacher',['id'=>$teach->id])}}" style="font-size: 17px;">
            <i class="fa fa-edit"></i>
          </a>

           

          <a href="{{route('admin.deleteteacher',$teach->id)}}" style="font-size: 17px;">
            <i class="fa fa-trash"></i>
          </a>
         
         </td> 
        
      </tr>
     
      

      @endforeach

	
	</tbody>
</table>

</form>

  </div>
</div>

</div>













@include('newtemplates.admin.adminJS')
@endsection