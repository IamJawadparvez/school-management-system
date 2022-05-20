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
		
<form method="POST" action="">
	@csrf
	<!-- <input type="hidden" name="redirect_id" value="{{ Request::segment(3) }}"> -->
	<div class="col-md-12 margin">
		<div class="col-md-2">
			<label>Student ID</label>
		</div>
		
		<div class="col-md-4">
			<input type="text" name="student_id"  class="form-control input" required="required">

		</div>
		<div class="col-md-1">
			<label>Monthly Fee</label>
		</div>
		<div class="col-md-4">
			<input type="text" name="monthly_fee"  class="form-control input" required="required">
		</div>

	</div>

	

		<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Discount</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
		</div>
		
		 <div class="col-md-4">
			<input type="text" name="discount_per"   class="form-control input" required="required">
		</div>
		<div class="col-md-1">
			<label>Net Fees</label>
		</div>
		
		<div class="col-md-4">
			<input type="text" name="net_fee"  class="form-control input" required="required">
		</div>

	</div>

	
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Transport</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="transport"  class="form-control input" >
		</div>

	</div>


	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Transport Amount</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="transport_amount"  class="form-control input" >
		</div>

	</div>

	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Security Deposit</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="security_deposit"  class="form-control input" required="required" >
		</div>

	</div>


		

	
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Security Refunded</label>
		</div>
		
		<div class="col-md-9">
			<select name="security_refunded" class="form-control" required="required">
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
			<input type="text" name="admission_paid"  class="form-control input"  required="required"></textarea>
		</div>

	</div>
	<div class="col-md-12 margin">
		
		<div class="col-md-2">
			<label>Arrears</label>
		</div>
		
		<div class="col-md-9">
			<input type="text" name="arrears"  class="form-control input" ></textarea>
		</div>

	</div>
	

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center style=" margin-left: 79%;">
		<input type="submit" name="submit" value="Insert" class="btn btn-success" style="margin-left: : 80px;">	

	


	
	</center>
	</div>
</form>


</div>
</div>
@include('templates.admin.adminJS')
@endsection