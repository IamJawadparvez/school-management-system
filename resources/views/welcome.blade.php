@include('templates.partials.head')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
<style type="text/css">
  .back
  {
            background-image: url("{{asset('public/images/1.jpg')}}");
  }
</style>
<!--     navbar -->

<div class="header">
  <img src="{{asset('public/images/hissablogo.png')}}" class="logo">
  <div class="header-right">
     <a href="#home">HOME</a>
      <a href="#aboutus">ABOUT US</a>
      <a href="#features">FEATURES</a>
      <a href="#odules">MODULES</a>
      <a href="#clients">OUR CLIENTS</a>
      <a href="#team">OUR TEAM</a>
      <a href="#contact">CONTACT US</a>
  </div>
</div>
<!-- navbar -->
<div class="content" >
<div class="row">

<div class="clearfix"></div>

<!-- home -->
<div id="home" class="row">
    <div class="col-md-12 col-sm-12 col-lg-12 divbg back">
        <center><h1 class="sh1">Providing The Best Services </h1></center>

    </div>
</div>
<!-- home ends -->
<div class="clearfix"></div>
<!-- about us -->
<div class="row margin" id="aboutus">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>ABOUT</span> US</h1>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
         <div class="col-sm-6 col-md-6 col-lg-6">
               <img src="{{asset('public/images/handshake.jpg')}}" class="himg"> 
         </div> 

         <div class="col-sm-6 col-md-6 col-lg-6">
           <h4 class="panel"><a style="color: white;cursor: pointer" onclick="showmenu(1)">Profile</a></h4>
           <div id="menu1">
             <p style="text-align: justify;">Hissab kres integrate and automate your retail and other operations – from the Point of Sale to the back office and up and down your supply chain, we turns your business into an efficient, smoothly running operation that can recognize and adapt quickly to change.When selecting a point of sale (POS) solution, users have a choice between stand-alone solutions and integrated solutions. They should first evaluate core and non-core components of POS systems, and assess the strengths and weaknesses of best-of-breed and integrated approaches</p>
           </div>
           <h4 class="panel"><a style="color: white;cursor: pointer" onclick="showmenu(2)">Mission</a></h4>
           <div id="menu2" style="display: none">
                          <p style="text-align: justify;">Our core competencies are focused on the design and implementation of state-of-the-art software solutions forManufacturing & Servicing Industries, financial & Educational Institutions, Government Organizations as well as Multinational Companies.</p>
           </div>
           <h4 class="panel"><a style="color: white;cursor: pointer" onclick="showmenu(3)">Vision</a></h4>                      
            <div id="menu3" style="display: none">
                          <p style="text-align: justify;">Hissab takes the transition to an automated business environment as smooth as possible. We realize that this is a complex process, and we guide our clients through it in a logical, orderly manner because our commitment to you is long term,. We design Hissab to allow for an assured upward growth path. Initial proposals are planned carefully in open environments to avoid wasteful and costly system replacements and inflexible proprietary roadblocks.</p>
           </div>

         </div>  
    </div>
  </div>

<!--   about us ends -->

<div class="clearfix"></div>
<!-- features -->
<div id="features" class="row margin" style="background-color: lightgrey">
   <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>KEY</span> FEATURES</h1>
    </div>
<div class="col-md-4">
  <img src="{{asset('public/images/easytolearn.png')}}" class="img">
  <h3 class="abt">Easy to learn</h3>
<h5 class="abt">You do not have to send your staff out for expensive training</h5>

</div>

<div class="col-md-4">
    <img src="{{asset('public/images/easytouse.png')}}" class="img">
      <h3 class="abt">Easy to use</h3>
      <h5 class="abt">You do not have to send your staff out for expensive training</h5>
</div>

<div class="col-md-4">
    <img src="{{asset('public/images/Flexibility-Icon.png')}}" class="img">
      <h3 class="abt">Flexibile</h3>
<h5 class="abt">You do not have to send your staff out for expensive training</h5>      
</div>


<div class="col-md-4">
  <img src="{{asset('public/images/reward.png')}}" class="img">
    <h3 class="abt">Reward</h3>
<h5 class="abt">You do not have to send your staff out for expensive training</h5>    
</div>

<div class="col-md-4">
    <img src="{{asset('public/images/calender.png')}}" class="img">
      <h3 class="abt">Up to date</h3>
<h5 class="abt">You do not have to send your staff out for expensive training</h5>      
</div>

<div class="col-md-4">
    <img src="{{asset('public/images/secure.png')}}" class="img">
      <h3 class="abt">Secure</h3>
<h5 class="abt">You do not have to send your staff out for expensive training</h5>      
</div>

</div>
<!-- features ends -->

<div class="clearfix"></div>
<!-- OUR MODULES -->
<div id="modules" class="row  margin">
   <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>OUR</span> MODULES</h1>
    </div>
<div class="col-md-12"> 
<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/product.png')}}" class="modImg"> Main Stock/Products</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/customer.png')}}" class="modImg"> Customer record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/icon-expenses.png')}}" class="modImg"> Daily Expenses Record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/sale.png')}}" class="modImg"> Daily Sales record</button>
</div>


<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/purchase.png')}}" class="modImg"> Daily Purchase record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/cashpaymentrecord.png')}}" class="modImg"> Cash Payment Record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/reciept.png')}}" class="modImg"> Cash Receipt Record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/Deposit.png')}}" class="modImg"> Bank Deposit Record</button>
</div>


<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/bank.png')}}" class="modImg"> Bank Payment Record</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/party.png')}}" class="modImg"> Party Ladger</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/bankledger.png')}}" class="modImg"> Bank Ledger</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/profitloss.png')}}" class="modImg"> Profit & Loss Statement</button>
</div>


<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/supermarket-sale-tag.png')}}" class="modImg"> Daily Sales Statment</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/chequebook.png')}}" class="modImg"> Cash Book</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/expansestatement.png')}}" class="modImg"> Expense Statment H.Wise</button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/barprint.png')}}" class="modImg"> Barcode Printing</button>
</div>


<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/barprint.png')}}" class="modImg"> Payable Receivable </button>
</div>

<div class="col-md-3">
  <button type="button" class="btn btn-warning btn-lg btnm"><img src="{{asset('public/images/barprint.png')}}" class="modImg"> Other Report on demand</button>
</div>
</div>

</div>
<!-- OUR MODULES -->
<div class="clearfix"></div>
<!-- OUR clients -->
<div id="clients" class="row margin">
   <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>OUR</span> CLIENT</h1>
    </div>
<div class="col-lg-12 col-sm-12 col-md-12">
  <div id="myCarouselWrapper" class="container-fluid" style="padding-left: 55px;">

       <div id="myCarousel" class="carousel slide">

  <div class="carousel-inner" role="listbox" class="col-md-12">
    <div class="item active">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
    <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
    <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
    <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
    <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
    <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
     <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
     <div class="item">
      <div class="item-item col-sm-3 col-sm-3"><a href="#"><img src="{{asset('public/images/2.png')}}" class="img-responsive crimg"></a></div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   

</div>

</div>

</div>
<!-- our clients -->
<div class="clearfix"></div>
<!-- OUR team -->
<div id="team" class="row margin">
   <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>OUR</span> TEAM</h1>
    </div>

   <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="col-md-3 col-sm-3 col-lg-3" id="img1" >
          <img src="{{asset('public/images/Anwar.JPG')}}"   class="img1">
          <div class="details" id="dt1">
              <div>
                  <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>                    
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-linkedin"></i>                                        
                  </div>
                <h3 class="abt">ANWAR SHAMIM</h3>
                <h6 class="abt">PROJECT MANAGER</h6>
              </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-lg-3" id="img2">
              <img src="{{asset('public/images/Aqeel.JPG')}}"   class="img1" style="width: 250px;height: 250px;" >
            <div class="details" id="dt2">
              <div>
                  <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>                    
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-linkedin"></i>                                        
                  </div>
                <h3 class="abt">AQEEL AHMAD</h3>
                <h6 class="abt">CEO</h6>
              </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-lg-3" id="img3">
              <img src="{{asset('public/images/Bilawal.JPG')}}"  class="img1" style="width: 250px;height: 250px;" >
              <div class="details" id="dt3">
                          <div>
                  <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>                    
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-linkedin"></i>                                        
                  </div>
                <h3 class="abt">BILAWAL BIN KHALID</h3>
                <h6 class="abt">WEB DEVELOPER</h6>
              </div>
              </div>              
        </div>

        <div class="col-md-3 col-sm-3 col-lg-3" id="img4">
              <img src="{{asset('public/images/Anees.JPG')}}"   class="img1" style="width: 250px;height: 250px;">
                 <div class="details" id="dt4">
                          <div>
                  <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>                    
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-linkedin"></i>                                        
                  </div>
                <h3 class="abt">ANEES UR RAHMAN</h3>
                <h6 class="abt">ANDROID DEVELOPER</h6>
              </div>
              </div> 
        </div>
    </div>  
</div>
<!-- OUR team -->

<!-- contact -->
<div id="contact" class="row">
   <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="abt"><span>CONTACT</span> US</h1>
    </div>
<div class="col-md-12 col-sm-12 col-lg-12">
  <div class="col-md-6 col-sm-6 col-lg-6">
    
<div class="col-md-12 col-sm-12 col-lg-12 margin">
<!--   <span class="input-group-addon fa fa-user lbl " id="basic-addon1"></span> -->
      <input type="text" id="full_name" class="form-control contactinput " placeholder="Full Name" aria-describedby="basic-addon1" >  
      <span for="full_name" class="fa fa-user input-icon lbl"></span>

  </div>

<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-lg-12 margin">

      <input type="text" id="email" class="form-control contactinput" placeholder="Email Address" aria-describedby="basic-addon1">  
      <span for="email" class="fa fa-envelope input-icon lbl" style="padding: 15px 18px 15px 18px"></span>
  </div>

<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-lg-12 margin">

      <input type="text" class="form-control contactinput " id="phone" placeholder="Your Phone Number" aria-describedby="basic-addon1">  
      <span for="phone" class="fa fa-phone input-icon lbl"></span>
  </div>

</div>

  <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="col-md-12 col-sm-12 col-lg-12 margin">

      <textarea type="text" class="form-control message " id="phone" placeholder="Your Message" aria-describedby="basic-addon1" style="height: 115px;overflow: hidden;"></textarea>  
      <span for="phone" class="fa fa-comment input-icon lbl" style="padding: 45px 20px 45px 20px"></span>
  </div>

      <div class="col-md-12 col-sm-12 col-lg-12 margin">
        <button class="btn btn-warning sendbtn">SEND MESSAGE</button>
  </div>
    
  </div>

</div>

</div>
<!-- contact -->

<div id="contact" class="row margin" style="background-color: #FFAF00;color: white">
   <div class="col-md-12 col-sm-12 col-lg-12 margin">
      <div class="col-md-3 col-sm-3 col-lg-3">
        <img src="{{asset('public/images/hissablogo.png')}}" style="width: 65%">
        <p style="font-size: 18px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply</p>
        <a href="#" style="color: white"><i class="fa fa-angle-double-right"></i> Read more</a>
      </div>

      <div class="col-md-3 col-sm-3 col-lg-3">
          <h2>Pages</h2>
          <hr>
          <ul class="ul">
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> ABOUT US</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> FEATURES</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> OUR TEAM</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> CONTACT US</li>                                                
          </ul>
      </div>

        <div class="col-md-3 col-sm-3 col-lg-3">
          <h2>QUICK LINKS</h2>
          <hr>
          <ul class="ul">
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>
            <li class="li"><i class="fa fa-angle-double-right"></i> HOME</li>                                                                                    
          </ul>
      </div>

          <div class="col-md-3 col-sm-3 col-lg-3">
          <h2>CONTACT US</h2>
          <hr>
          <ul class="ul">
            <li class="li"><i class="fa fa-angle-double-right"></i> HISSAB</li>
            <li class="li"><i class="fa fa-angle-double-right"></i>  Office no:abc mall deans plaza peshawar</li>
            <li class="li"><i class="fa fa-angle-double-right"></i>  phone no:+232433546</li>
            <li class="li"><i class="fa fa-angle-double-right"></i>  email:abc@gmail.com</li>                                                                                    
          </ul>
      </div>

</div>
</div>
<!-- contact -->
</div>

</div>
@include('templates.partials.scripts')
<script type="text/javascript">
 // $('#myCarousel').carousel({
 // interval: 4000
//});

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});


    $('#img1').mouseenter(function(){

        $('#dt1').show(100);

      });

  $('#img1').mouseleave(function(){

        $('#dt1').hide(200);

      });


    $('#img2').mouseenter(function(){

        $('#dt2').show(100);

      });

      $('#img2').mouseleave(function(){

        $('#dt2').hide(200);

      });


        $('#img3').mouseenter(function(){

        $('#dt3').show(100);

      });

  $('#img3').mouseleave(function(){

        $('#dt3').hide(200);

      });


            $('#img4').mouseenter(function(){

        $('#dt4').show(100);

      });

  $('#img4').mouseleave(function(){

        $('#dt4').hide(200);

      });

</script>
@include('templates.admin.adminJS')
