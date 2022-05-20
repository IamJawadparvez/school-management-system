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
		
<form method="POST" action="{{route('admin.addnewfee')}}">
	@csrf

<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-5 col-5">
				<div class="form-group">
			<label>Student ID</label>
		
			<input type="number" name="student_id" value="{{$newfee->student_id}}" class="form-control input" required="required" readonly="readonly">
			</div>
			</div>

			<div class="col-lg-5 col-5">

				<div class="form-group">
					<div>
						<label>Monthly Fee</label>
					 </div>
			
		
			@if(old('monthly_fee'))
						<input type="number" class="form-control count_total" onkeyup="get_total_fee(this);" data-type="month_fee" id="monthly_fee" name="monthly_fee" value="{{old('discount')}}">				
						@else
						<input type="number" class="form-control count_total" onkeyup="get_total_fee(this);" data-type="month_fee" id="monthly_fee" name="monthly_fee" value="0">				
						@endif
		</div>
				
			</div>
			
		</div>

		
	</div>
<div class="col-md-12 margin">
		<div class="row">

			<div class="col-lg-3 col-3">
			<div class="form-group">
				<div>
					<label>Percentage</label>
				</div>
				
					<input type="radio" onclick='get_discount(this)' name="discount_percent" value="25"><span>25 %</span>
						<input type="radio" onclick='get_discount(this)' name="discount_percent" value="50"><span>50 %</span>	
						<input type="radio" onclick='get_discount(this)' name="discount_percent" value="75"><span>75 %</span>					
						<input type="radio" onclick='get_discount(this)' name="discount_percent" value="other" checked="checked" ><span>Other</span>	
			</div>
			</div>

			<div class="col-lg-3 col-3">

				<div class="form-group">
					<div>
						<label>Discount %age</label>
					</div>
			
		
			@if(old('discount'))
	
						<input type="number" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="discount_percent_custom" name="discount" value="{{old('discount')}}" id="discount" readonly="readonly">					
							@else

						<input type="number" step="2" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="discount_percent_custom" name="discount" value="0" id="discount" min="1" max="100">
						@endif
		</div>
				
			</div>

		<!-- 	<div class="col-lg-4 col-3">

				<div>
						<label>Net Fee</label>	
					</div>

						@if(old('net_fee'))
	
						<input type="number" id="net_fee"  class="form-control count_total" onkeyup="get_total_fee(this);" name="net_fee" value="{{old('net_fee')}}" readonly="readonly" id="netfee">				
							@else
						<input type="number" id="net_fee"  class="form-control count_total" onkeyup="get_total_fee(this);" name="net_fee" value="0" readonly="readonly">				
						@endif

				
			</div> -->
			
		</div>

		
	</div>

	<div class="col-md-12 margin">
		<div class="row">
     <div class="col-lg-5 col-5">

				<div class="form-group">

			
						@if(old('transport')=='yes')
								
								<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>
							@else
									
								<input type="checkbox" value="yes" name="transport" onclick="selectVan(this)"><span>Using Transport</span>		
							@endif
		          </div>
						<div>
							@if(old('transport_amnt')=='yes')
								
							
								<input type="number" name="transport_amnt" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="transport_amnt" value="{{old('transport_amnt')}}" readonly="readonly" id="transport_amnt">

								@else
									
								
								<input type="number" name="transport_amnt" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="transport_amnt" value="0" readonly="readonly" id="transport_amnt">
							@endif	




						 </div>
				
			</div>
			

			<div class="col-lg-5 col-5">

				<div class="form-group">
					<div>
						

					<label style="margin-bottom: 3%;">Security</label>	
					</div>
			
		
					<div>
						@if(old('route'))
								<input type="number" name="security_deposit" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="security_deposit" value="{{old('security_deposit')}}">
								@else
								<input type="number" name="security_deposit" class="form-control count_total" onkeyup="get_total_fee(this);"  data-type="security_deposit" value="0">
								@endif	


					</div>
		</div>
				
			</div>
			
		</div>

		
	</div>



<div class="col-md-12 margin">
		<div class="row">
     <div class="col-lg-5 col-5">

				<div class="form-group">
			<label>Arrears</label>
		<input type="number" name="arrears" class="form-control input count_total" onkeyup="get_total_fee(this);" data-type="arrears" required="required" value="0">
			
		</div>
				
			</div>
			

			<div class="col-lg-5 col-5">

				<div class="form-group">
		<label>Total Fee</label>
		
			<input type="number" name="totalfee" id="totalfee" class="form-control input" readonly required="required">
		</div>
				
			</div>
			
		</div>

		
	</div>







	

	

		

	
	

	
	
	

<input type="hidden" name="action" id="action">
	<div class="col-md-12">
		<center style=" margin-left: 60%;">
		<input type="submit" name="submit" value="Save" class="btn btn-success" >	
		<input type="submit" name="Exit" value="Exit" class="btn btn-danger" >	


	


	
	</center>
	</div>
</form>


</div>
</div>
@include('templates.admin.adminJS')

<script type="text/javascript">
	
function get_total_fee(th){


  total = 0;
  $('.count_total').each(function(){

		  val = Number($(this).val());
		  type = $(this).attr('data-type');  	

		  if(type=='month_fee'){

		      total = total + val;

		  }else if(type=='discount_percent_custom'){

		          monthly = $('#monthly_fee').val();
		          total_dis = monthly * (Number($('#discount').val()) / 100);

		          total = total - total_dis;


		  }else if(type=='transport_amnt'){

		      total = total + val;

		  }else if(type=='security_deposit'){

		      total = total + val;

		  }else if(type=='arrears'){

		      total = total + val;

		  }




  });	





  $('#totalfee').val(total);


}


function get_discount(d)
{


 disc = $(d).val();

 $('#discount').val(disc);	

  total = 0;
  $('.count_total').each(function(){

      val = Number($(this).val());
      type = $(this).attr('data-type');   

      if(type=='month_fee'){

          total = total + val;

      }else if(type=='discount_percent_custom'){

              monthly = $('#monthly_fee').val();
              total_dis = monthly * (Number($('#discount').val()) / 100);

              total = total - total_dis;


      }else if(type=='transport_amnt'){

          total = total + val;

      }else if(type=='security_deposit'){

          total = total + val;

      }else if(type=='arrears'){

          total = total + val;

      }


  $('#totalfee').val(total);


});

}   


</script>

@endsection