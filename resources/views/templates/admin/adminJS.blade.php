<script type="text/javascript">
  function showmenu(x){

    for(t=1;t<=3;t++)
    {
      if(t==x)
      {
        $('#menu'+t).toggle(100);
      }
      else
      {
        $('#menu'+t).hide(100);
      }
    }
  }

function getRoute()
{
  van_id = $('#van_id').val();
  data={'id':van_id,'_token':"{!! csrf_token() !!}"};
  var x = '<option>-- Select --</option>';
      jQuery.ajax({
                      url: "{{  route('admin.getRoute') }}",
                      data: data,
                      type: 'POST',
                      
                      success: function (response) {
                        for(i=0;i<response.length;i++)
                        {
                          x += '<option value='+response[i].id+'>'+response[i].name+'</option>';       
                        }

                        $('#route').html(x);
                      } 
  });

}

function getDiscount(d)
{ 
 
  var val = $(d).val();
  total = $('#monthly_fee').val(); 
  var v;
  if(val=='other')
  {
     $("#discount").attr("readonly", false); 

        v = 0;
  }
  else
  {
     $("#discount").attr("readonly", true); 
      v = $(d).val();
  }

    net = total * (v/100);

    $('#discount').val(v);
    $('#net_fee').val(total-net);
}   

function getOtherDis(dis)
{
    var val = $(dis).val();
    total = $('#monthly_fee').val(); 

    net = total * (val/100);
    $('#net_fee').val(total-net);
}

function selectVan(c)
{
 if ($(c).prop('checked') == true)
 {
    $('#transport_amnt').attr("readonly", false); 
    $('#van_id').attr("disabled", false);     
 }
 else
 {
    $('#transport_amnt').attr("readonly", true); 
     $('#van_id').attr("disabled", true);     
 }
}




function getLeftSchool(l)
{
   if ($(l).prop('checked') == true)
 {

    $('#left_school_date').attr("disabled", false);     
    $('#reason_to_leave').attr("disabled", false);     
 }
 else
 {
    $('#left_school_date').attr("disabled", true);     
     $('#reason_to_leave').attr("disabled", true);     
 }
}

   function readIMG(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

function changeImg(img)
{
   readIMG(img);
}

function getAmnt(t)
{
  $('#net_fee').val($(t).val());
}

function searchReg()
{
  reg1 = $('#reg1').val();
  reg2 = $('#reg2').val();  


  data={'reg1':reg1,'reg2':reg2,'_token':"{!! csrf_token() !!}"};

      jQuery.ajax({
                      url: "{{  route('admin.getReg') }}",
                      data: data,
                      type: 'POST',
                      
                      success: function (response) {
                        if(response=='exist')
                        {
                          $('#regError').html('Exist !');
                          $('#regError').css('color', 'red');
                        }
                        else
                        {
                          $('#regError').html('Not Found !');
                        $('#regError').css('color', 'green');
                        }
                      } 
  });

}

function removeImg()
{
    $('#imagePreview').attr('src', '{{asset("public/images/user.jpg")}}');

$("#file-upload").val(null);    
}

function ShowEntries()
{
     n = $('#show_entry').val();
    window.location.replace('{{route("admin.ShowStdRecord",["num"=>'+n+'])}}');

     // 
}

</script>
