@extends('newtemplates.default')
@section('content')
<div class="row pt-4">
	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow ">
            <div class="inner ml-3">
              <h3>{{$student}}</h3>

              <p>Total Students</p>
            </div>
            <div class="icon ml-3">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
       </div>

	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$classes}}</h3>

              <p>Total Classes</p>
            </div>
            <div class="icon">
              <i class="fa fa-window-maximize"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
       </div>



	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$house}}</h3>

              <p>Total House</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
       </div>

	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$van}}</h3>

              <p>Total Vans</p>
            </div>
            <div class="icon">
              <i class="fa fa-bus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
       </div>



</div>
@endsection