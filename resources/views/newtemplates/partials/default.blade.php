

@include('newtemplates.partials.head')

<!-- Pre loader -->
@include('newtemplates.partials.loader')

@include('newtemplates.partials.aside')
<!--Sidebar End-->
@include('newtemplates.partials.top_nav')
@include('newtemplates.partials.header')
   @yield('content')
     @yield('addModals')
<!-- Right Sidebar -->

@include('newtemplates.partials.footer')