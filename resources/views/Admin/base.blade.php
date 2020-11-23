<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from metroadmin.dexignzone.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 05:20:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>Admin </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{URL::asset('Admin/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body data-typography="roboto" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1" data-sidebar-position="static" data-header-position="static" data-container="wide" direction="ltr" data-primary="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="brand-title" src="{{URL::asset('UI/images/logo-dark.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('Admin.common.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('Admin.common.sidebar')
        
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('Content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Skillgroom</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
		
        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{URL::asset('Admin/vendor/global/global.min.js')}}"></script>
	<script src="{{URL::asset('Admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{URL::asset('Admin/js/custom.min.js')}}"></script>

    <!-- Vectormap -->
    <script src="{{URL::asset('Admin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>


    <!--  flot-chart js -->
    <script src="{{URL::asset('Admin/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{URL::asset('Admin/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Demo scripts -->
    <script src="{{URL::asset('Admin/js/dashboard/dashboard-2.js')}}"></script>

    <script src="{{URL::asset('Admin/js/custom/courses.js')}}"></script>

	<!-- Svganimation scripts -->
    <script src="{{URL::asset('Admin/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{URL::asset('Admin/vendor/svganimation/svg.animation.js')}}"></script>
    {{-- <script src="{{URL::asset('Admin/js/styleSwitcher.js')}}"></script> --}}
    
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    @yield('JSScript')


    <script>
        $(document).ready( function () {
    $('#Classes').DataTable();
} );

$(document).ready( function () {
    $('#Partners').DataTable();
} );

$(document).ready( function () {
    $('#Inquiries').DataTable();
} );


    </script>

<script type="text/javascript" language="javascript">
    var idleMax = 30; // Logout after 30 minutes of IDLE
    var idleTime = 0;

    var idleInterval = setInterval("timerIncrement()", 60000);  // 1 minute interval    
    $( "body" ).mousemove(function( event ) {
        idleTime = 0; // reset to zero
  });

  // count minutes
  function timerIncrement() {
      idleTime = idleTime + 1;
      if (idleTime > idleMax) { 
          window.location="LogOut.php";
      }
  }       
</script>
    {{-- <script>
        $(document).on('click', '#Sigin', function(){
            alert("dasdsa");
            return false;
            
var email = $("#email").val();
var password = $("#password").val();

if(email == "admin@admin.com" && password = "Admin"){
    window.location.href = "/admin/dashboard";
}else{
    alert("Wrong Username Or Password")
    return false;
}

});
        </script> --}}
</body>

<!-- Mirrored from metroadmin.dexignzone.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 05:20:39 GMT -->
</html>