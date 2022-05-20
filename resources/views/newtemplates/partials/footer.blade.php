</div>
<script src="{{asset('public/assets/js/app.js')}}"></script>


<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

@include('sweetalert::alert')

</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 10:43:15 GMT -->
</html>