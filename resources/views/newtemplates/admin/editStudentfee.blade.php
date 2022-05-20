@extends('newtemplates.default')
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
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Student ID</label>
		
			<input type="text" name="student_id" value="{{$studentfee->student_id}}" class="form-control input" readonly>
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Monthly Fee</label>
		
			<input type="text" name="monthly_fee" value="{{$studentfee->monthly_fee}}" class="form-control input" required="required">
		</div>
				
			</div>
			
		</div>

		
		

	</div>

	

		<div class="col-md-12 margin">
		
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Discount</label>
		
			<input type="text" name="discount_per" value="{{$studentfee->discount_per}}" class="form-control input">
			</div>
			</div>

			<!-- <div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Monthly Fee</label>
		
			<input type="text" name="monthly_fee" value="{{$studentfee->monthly_fee}}" class="form-control input" required="required">
		     </div>
				
			</div> -->
			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Net Fee</label>
		
			<input type="text" name="net_fee" value="{{$studentfee->net_fee}}" class="form-control input">
			</div>
			</div>

			
		</div>
	</div>

	<div class="col-md-12 margin">
		
		<div class="row">
			<!-- <div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Transport</label>
		
			<input type="text" name="transport" value="{{$studentfee->transport}}" class="form-control input">
			</div>
			</div> -->
			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Transport</label>
		
			<select name="transport" value="<?php if($studentfee->transport=='YES')echo"selected='selected'";?>" class="form-control" required="required">
		<option value="Yes">YES</option>
		<option value="No">No</option>
	</select>
</div>

			
			
			
		</div>
		<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Transport Amount</label>
		
			<input type="text" name="transport_amount" value="{{$studentfee->transport_amount}}" class="form-control input">
			</div>
			</div>
	</div>
</div>
	<div class="col-md-12 margin">
		
		<div class="row">

			<!-- <div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Transport</label>
		
			<input type="text" name="transport" value="{{$studentfee->transport}}" class="form-control input">
			</div>
			</div> -->

			<!-- <div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Transport amount</label>
		
			<input type="text" name="transport_amount" value="{{$studentfee->transport_amount}}" class="form-control input" required="required">
		     </div>
				
			</div>
			 -->
		</div>
	</div>

	<div class="col-md-12 margin">
		
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Security Deposit</label>
		
			<input type="text" name="security_deposit" value="{{$studentfee->security_deposit}}" class="form-control input">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Security Refunded</label>
		
			<select name="security_refunded" value="<?php if($studentfee->security_refunded=='YES')echo"selected='selected'";?>" class="form-control" required="required">
		<option value="Yes">YES</option>
		<option value="No">No</option>
			
		</select>
		     </div>
				
			</div>
			
		</div>
	</div>
<div class="col-md-12 margin">
		
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Admission </label>
		
			<input type="text" name="admission_paid" value="{{$studentfee->admission_paid}}" class="form-control input">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Arrears</label>
		
			<input type="text" name="arrears" value="{{$studentfee->arrears}}" class="form-control input" required="required">
		     </div>
				
			</div>
			
		</div>
	</div>
	

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center>
		<input type="submit" name="submit" value="Update"  class="btn btn-success" style="margin-left:300px; margin-bottom: 5%">	

	


		<a href="" class="btn btn-danger" style="margin-bottom: 5%;"> Ignore & Exit</a> 
	</center>
	</div>
</form>


</div>
</div>
@include('templates.admin.adminJS')
@endsection