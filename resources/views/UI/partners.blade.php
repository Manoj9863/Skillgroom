
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('UI/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('UI/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('UI/css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('UI/css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('UI/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('UI/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('UI/css/magnific-popup.css')}}" type="text/css"/>
    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="{{URL::asset('UI/css/datepicker.css')}}" type="text/css"/>
  
    <!-- Hosting Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('UI/css/course.css')}}" type="text/css"/>
  
    <link rel="stylesheet" href="{{URL::asset('UI/css/responsive.css')}}" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
  <script>


      //this will hide message after 3 seconds
      setTimeout(function () {
          $("#statusMessage").hide();
      }, 3000)

  </script>
	<!-- Document Title
	============================================= -->
	<title>::Welcome to Skillsgroom | Partners::</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }

		.calories-wrap {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		#partner-form .btn-outline-dark:not(.disabled):not(.active):not(:hover) {
			color: #444;
			background-color: #FFF;
			border-color: #CED4DA;
		}

	</style>

</head>


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark" style="background-color:#101130;">

    <div id="header-wrap">

      <div class="container clearfix">

        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

        <!-- Logo
                  ============================================= -->
        <div id="logo">
          <a href="index.php" class="standard-logo" data-dark-logo="{{URL::asset('UI/images/logo-dark.png')}}"><img src="{{URL::asset('UI/images/logo.png')}}" alt="Skillsgroom"></a>
          <a href="index.php" class="retina-logo" data-dark-logo="{{URL::asset('UI/images/logo-dark@2x.png')}}"><img
                src="{{URL::asset('UI/images/logo-dark.png')}}" alt="Skillsgroom"></a>
        </div><!-- #logo end -->

        <!-- Primary Navigation
                  ============================================= -->
        <nav id="primary-menu">

						<ul>
							<li class="current"><a href="blog/index.php"><div>Blog</div></a></li>
							<!--<li><a href="about.html"><div>About Us</div></a></li>
							<li><a href="contact.html"><div>Contact Us</div></a></li>
<li><a href="contact.html"><div>Sign Up</div></a></li>-->
						</ul>


					</nav><!-- #primary-menu end -->

      </div>

    </div>

  </header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1 class="center">SUBMIT DETAILS TO PARTNER WITH US</h1>
				<!--<span>Forms Widget</span>-->
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content" class="pt-0">

			<div class="content-wrap pt-0">

				<div class="container clearfix">

						<div class="row shadow bg-light border">

							<div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.2)), url('{{URL::asset('UI/images/partner.jpg')}}') center center / cover; min-height: 400px;">
								
							</div>

							<div class="col-lg-8 p-5">
                                <div class="alert alert-success" id="ShowMsg" style="display: none;">
                                    <strong id="SussMsg"></strong> 
                                  </div>

								<form class="row mb-0" id="partner-form" action="" method="post" enctype="multipart/form-data">
									<div class="form-process"></div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-name">Name</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-name" id="name" class="form-control" required value="" placeholder="Enter your Full Name">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-email">Email</label>
											</div>
											<div class="col-sm-9">
												<input type="email" name="partner-form-email" id="email" class="form-control" required value="" placeholder="Enter your Email">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-phone">Phone</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-phone" id="mobile" class="form-control" required value="" placeholder="Your Contact Number">
											</div>
										</div>
									</div>

                                  <div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-state">State</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-state" id="state" class="form-control" required value="" placeholder="Your State">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-city">City</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-city" id="city" class="form-control" required value="" placeholder="Your City">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-class">Tuition Class Name</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-class" id="tution" class="form-control" required value="" placeholder="Your Tuition Class Name">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-subject">Subjects</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-subject" id="subjects" class="form-control" required value="" placeholder="Your Subjects">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-standard">Standard</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-standard" id="standard" class="form-control" required value="" placeholder="Your Standard">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-board">Education Boards</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-board" id="education" class="form-control" required value="" placeholder="Your Education Boards">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-students">No of students</label>
											</div>
											<div class="col-sm-9">
												<input type="number" name="partner-form-students" id="no_of_students" class="form-control" required value="" placeholder="No of students">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-3 col-form-label">
												<label for="partner-form-website">Website link if you have</label>
											</div>
											<div class="col-sm-9">
												<input type="text" name="partner-form-website" id="website" class="form-control" value="" placeholder="Your Website link">
											</div>
										</div>
									</div>						

									
									<div class="col-12 d-flex justify-content-end align-items-center">
										
										<input type="button" id="AddPartners" name="send" class="btn btn-success ml-2"  value="Submit Details">
									</div>

								</form>
							</div>

						</div>

					

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

    <div class="container">

      <!-- Footer Widgets
              ============================================= -->
      <div class="footer-widgets-wrap clearfix">

        <div class="col_two_third">

          <div class="col_one_third">

            <div class="widget clearfix">

              <!--<h4>Locations</h4>-->
              <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                <address>
                  B305, Celebrity Square, Bidaraguppe<br>
                  Sarjapur Attibele Main Road,<br>
                  Bengaluru, Karnataka, India -562107.
                </address>
                <abbr title="Phone Number"><strong>Phone:</strong></abbr> +91 9916669702<br>
                <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:info@skillsgroom.com">info@skillsgroom.com</a>
                <div class="widget clearfix">
                  <!--<h4>Follow Us</h4>-->
                  <a href="https://www.facebook.com/SkillsGroom" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin"
                     style="margin-right: 10px;">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                  </a>
                  <!--<a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                          <i class="icon-twitter"></i>
                                          <i class="icon-twitter"></i>
                                      </a>-->
                  <a href="https://www.instagram.com/skills_groom" target="_blank" class="social-icon si-dark si-colored si-instagram nobottommargin"
                     style="margin-right: 10px;">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                  </a>
                  <a href="https://www.youtube.com/channel/UCwhWbSkbUCn8_vG_06sj8cQ?view_as=subscriber" target="_blank" class="social-icon si-dark si-colored si-youtube nobottommargin"
                     style="margin-right: 10px;">
                    <i class="icon-youtube"></i>
                    <i class="icon-youtube"></i>
                  </a>
                </div>
              </div>

            </div>

          </div>

        </div>


      </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
          ============================================= -->
    <div id="copyrights">

      <div class="container clearfix">


        © Copyright 2020 All Rights Reserved by <a href="index.php">Skillsgroom</a>


      </div>

    </div><!-- #copyrights end -->

  </footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{URL::asset('UI/js/jquery.js')}}"></script>
<script src="{{URL::asset('UI/js/plugins.js')}}"></script>


<script src="{{URL::asset('UI/js/datepicker.js')}}"></script>

<!-- Footer Scripts
  ============================================= -->
<script src="{{URL::asset('UI/js/functions.js')}}"></script>

    <script src="{{URL::asset('UI/js/custom/class.js')}}"></script>
</body>
</html>