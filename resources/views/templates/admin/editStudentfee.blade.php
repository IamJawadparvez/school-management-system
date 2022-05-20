@extends('templates.default')
@section('content')
<style type="text/css">
	.margin{
		padding: 3px;
	}
	.input{
		border-radius: 5px;
	}
</style>
	<div class="row">
		<div class="col-md-12">
		
<form method="POST" action="{{route('admin.post.editStudentfee',['id'=>$studentfee->id])}}">
	@csrf
	<input type="hidden" name="redirect_id" value="{{ Request::segment(3) }}">
	<div class="col-md-12 margin">
		<div class="col-md-2">
			<label>Student ID</label>
		</div>
		
		<div class="col-md-4">
			<input type="text" name="student_id" value="{{$studentfee->student_id}}" class="form-control input" readonly>

		</div>
		<div class="col-md-1">
			<label>Monthly Fee</label>
		</div>
		<div class="col-md-4">
			<input type="text" name="monthly_fee" value="{{$studentfee->monthly_fee}}" class="form-control input" required="required">
		</div>

	</div>

	<!-- <div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Monthly Fee</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="monthly_fee" value="{{$studentfee->monthly_fee}}" class="form-control input" required="required">
		</div>

	</div> -->

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Discount</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
		</div>
		
		 <div class="col-md-4">
			<input type="text" name="discount_per"  value="{{$studentfee->discount_per}}" class="form-control input" required="required">
		</div>
		<div class="col-md-1">
			<label>Net Fees</label>
		</div>
		
		<div class="col-md-4">
			<input type="text" name="net_fee" value="{{$studentfee->net_fee}}" class="form-control input" >
		</div>

	</div>

	<!-- <div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Net Fees</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="net_fee" value="{{$studentfee->net_fee}}" class="form-control input" >
		</div>

	</div> -->

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Transport</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="transport" value="{{$studentfee->transport}}" class="form-control input" >
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Transport Amount</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="transport_amount" value="{{$studentfee->transport_amount}}" class="form-control input" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Security Deposit</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="security_deposit" value="{{$studentfee->security_deposit}}" class="form-control input" >
		</div>

	</div>


		

	<!-- <div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Security Refunded</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="security_refunded" value="{{$studentfee->security_refunded}}" class="form-control input" ></textarea>
		</div>

	</div> -->
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Security Refunded</label>
		</div>
		
		<div class="col-md-9">
			<select name="security_refunded" value="<?php if($studentfee->security_refunded=='YES')echo"selected='selected'";?>" class="form-control" required="required">
		<option value="Yes">YES</option>
		<option value="No">No</option>
			
		</select>
		</div>
		
	</div>
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Admission Paid</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="admission_paid" value="{{$studentfee->admission_paid}}" class="form-control input" ></textarea>
		</div>

	</div>
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Arrears</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="arrears" value="{{$studentfee->arrears}}" class="form-control input" ></textarea>
		</div>

	</div>
	<!-- <div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Month</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="created_at" value="{{$studentfee->created_at}}" class="form-control input" ></textarea>
		</div>

	</div> -->


<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Update"  class="btn btn-success" style="margin-left: : 80px;">	

	


		<!-- <a href="" class="btn btn-danger" style="margin-right: 80px;"> Ignore & Exit</a> -->
	</center>
	</div>
</form>


</div>
</div>
@include('templates.admin.adminJS')
@endsection