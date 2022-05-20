@extends('newtemplates.default')
@section('content')
<div class="row" id="row">
<div class="col-md-12">

  <a href="{{route('admin.addStudentfee',['id'=>$id])}}" type="button"  class="btn btn-success" style="margin-top: 2%;">Add School Fee</a>




<table class="table table-bordered table-striped" style="margin-top: 4%;">
	<thead>
		<tr>
			<th>#</th>
      <th>id</th>
			<th>Student_id</th>			
			<th>Monthly_Fee</th>
			<th>Discount_per</th>												
                                   
      <th>Transport</th> 
       <th>Transport_Amount</th>
        <th>Security_Deposit</th>
        
          
           <th>Arrears</th>
           <th>Total</th>
            <th>Month</th>                                   

		</tr>
	</thead>
	<tbody id="myTable">
		@foreach($studentfee as $s)

			<tr>
        <td>
          <a href="{{route('admin.editStudentfee',['id'=>$s->id])}}" style="font-size: 17px;">
            <i class="fa fa-edit"></i>
          </a>

           <a href="{{url('admin.',['id'=>$s->id])}}" target="_blank" style="font-size: 17px;">
            <i class="fa fa-print"></i>
          </a>

          <a href="{{route('admin.studentfee',$s->id)}}" style="font-size: 17px;">
            <i class="fa fa-trash"></i>
          </a>
         
         </td>           
				<td>{{$s->id}}</td>
				<td>{{$s->student_id}}</td>				
				<td>{{$s->monthly_fee}}</td>			
        		<td>{{$s->discount}}</td>     
        		     
        		
            <td>{{$s->transport}}</td>
            <td>{{$s->transport_amount}}</td>
            <td>{{$s->security_deposit}}</td>
          
        
            <td>{{$s->arrears}}</td>
            <td>{{$s->totalfee}}</td>
            <td>{{$s->created_at}}</td>                     
         
			</tr>
		@endforeach		
	</tbody>
</table>
{{$studentfee->links()}}



@include('templates.admin.adminJS')
@endsection