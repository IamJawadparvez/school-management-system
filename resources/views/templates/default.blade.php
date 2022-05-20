<!DOCTYPE html>
<html>

   @include('templates.partials.head')  

<body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">
   @include('templates.partials.header')
     @include('templates.partials.sidebar') 

       <div class="content-wrapper" style="background-color: white;">
    <!-- Content Header (Page header) -->

   @yield('breadcrums')
  @include('templates.partials.alerts')
<section class="content">  
    	@yield('content')
  @yield('addModals')
</section>

  @yield('jsOutside')


	</div>
  @include('templates.partials.scripts')
  @include('templates.partials.footer')

</div>
</body>
</html>
