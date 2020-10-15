<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from metroadmin.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 05:20:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Skillgroom | Admin </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{URL::asset('Admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    @if(session('message'))
  
                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
                                    @endif
                                    <form action="/admin/admin_login" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter Your Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            {{-- <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div> --}}
                                            {{-- <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	{{-- <script src="{{URL::asset('Admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{URL::asset('Admin/js/custom.min.js')}}"></script>
    <script src="{{URL::asset('Admin/js/deznav-init.js')}}"></script> --}}


    <script>
        $(document).on('click', '#Sigin', function(){

            var email = $("#email").val();
            var password = $("#password").val();

            if(email == 'admin@admin.com' & password == 'Admin'){
                window.location.href = "/admin/dashboard";
            }else{
                alert("Wrong Username Or Password")
                return false;
            }

        });
        </script>
</body>


<!-- Mirrored from metroadmin.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 05:20:38 GMT -->
</html>

