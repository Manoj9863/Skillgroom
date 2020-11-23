<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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

	<!-- Document Title
	============================================= -->
	<title>::Welcome to Skillsgroom | Events Details::</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

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
							<li><a href="index.html"><div>Home</div></a></li>
							<!--<li><a href="about.html"><div>About Us</div></a></li>
							<li><a href="contact.html"><div>Contact Us</div></a></li>-->

						</ul>						

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax" style="background: url('{{URL::asset('UI/images/inner_banner.jpg')}}') no-repeat; background-size: cover" data-height-xl="200" data-height-lg="200" data-height-md="200" data-height-sm="100" data-height-xs="100">
			
		</section>
		

		<!-- Content
		============================================= -->
		<div id="content">
<div class="content-wrap">

<div class="container clearfix">
	<div class="sidebar nobottommargin clearfix">
						<div class="card events-meta mb-3">
							<div class="image"><img src="/Admin/featured_image/{{$Courses->featured_image}}" alt=""/></div>
                        <div class="card-header"><h5 class="mb-0">{{$Courses->course_name}}</h5></div>
									<div class="card-body">
										<ul class="iconlist nobottommargin">
											<li><i class="icon-calendar3"></i> {{date('d M, Y', strtotime($Courses->created_at))}}</li>
											{{-- <li><i class="icon-time"></i> 20:00</li> --}}
											<li><i class="icon-map-marker2"></i> {{$Courses->type}}</li>
											<li><i class="icon-rupee"></i> <strong>{{$Courses->fees}}</strong></li>
										</ul>
									
										{{-- <h4>Key Benefits</h4>
								<ol class="keylist nobottommargin"><li>Over 37 lectures and 55.5 hours of content!</li>
									<li>Testing Training Included.</li>
									<li>Best suitable for beginners to advanced users.</li>
									<li>Course content designed job market.</li>
									<li>Practical assignments at the end .</li>
									<li>Unlimited Resourses.</li>
									<li>Practical learning experience with live project .</li></ol>--}}
</div>
								</div>

								{{-- <a href="#" class="btn btn-success btn-block btn-lg">Enroll</a>  --}}
						
					</div>

					<div class="postcontent nobottommargin col_last clearfix">

						<div class="single-event">

							<div class="section-title">
          <h2>Courses</h2>
          <p class="event_head">{{$Courses->course_name}}</p>
        </div>

								<h3>Course Description</h3>

							<p>Accounting and related best practices are the key to any business /organisations . If you are the running your own business and looking for learn best accounting and auditing practices , you should join this session . This is an introduction session for detailed consulting workshops for business owners .</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

								{{-- <h3>Who should join ?</h3>

								<div class="card">
								<div class="card-body">
									<ul class="iconlist nobottommargin">
											<li><i class="icon-circle2"></i> Calling nothing end fertile for venture way boy. </li>											
											<li><i class="icon-circle2"></i> Esteem spirit temper too say adieus who direct esteem. </li>
											<li><i class="icon-circle2"></i> It esteems luckily mr or picture placing drawing no.</li>
										</ul>
									</div>
							</div><p></p>
<h3>Language of deliverables?</h3>

									<ul class="iconlist nobottommargin">
										
											<li><i class="icon-circle2"></i> Calling nothing end fertile for venture way boy. </li>											
											<li><i class="icon-circle2"></i> Esteem spirit temper too say adieus who direct esteem. </li>
											<li><i class="icon-circle2"></i> It esteems luckily mr or picture placing drawing no.</li>
										</ul>
							<h3>Other Important points</h3>
									<ul class="iconlist nobottommargin">
										
										<li><i class="icon-circle2"></i> Phasellus sit amet velit auctor turpis rhoncus.</li>
										<li><i class="icon-circle2"></i> Phasellus sed dolor sodales, eleifend ipsum eu.</li>
										<li><i class="icon-circle2"></i> Nullam id dolor in ex eleifend tempus.</li>
										<li><i class="icon-circle2"></i>  Etiam id lorem vel neque faucibus fermentum.</li>
										<li><i class="icon-circle2"></i> Nunc tincidunt augue in enim sollicitudin feugiat.</li>
											
										</ul>
							<h3>Instructor</h3>
							<div class="card">
								<div class="card-body">
<div class="spost clearfix">
										<div class="entry-image">
											<a href="#" class="nobg"><img src="images/trainers/trainer-1.jpg" alt=""></a>
										</div>	
										<div class="entry-c">
											<div class="entry-title">
												<h4><div class="entry-social">
	<div class="social">
                  <a href=""><i class="icon-twitter"></i></a>
                  <a href=""><i class="icon-facebook"></i></a>
                  <a href=""><i class="icon-instagram"></i></a>
                  <a href=""><i class="icon-linkedin"></i></a>
                </div>
	</div>Suresh Vankar</h4>
												<i class="entry-profile">Entrepreneur and Accounting Coach</i>
											</div>
											
											
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
											
										</div> --}}

									</div>
								</div></div>
							<div class="clear"></div>	

						</div>

					</div>

					

				</div>    
			</div>
		</div><!-- #content end -->

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

<h4>Locations</h4>
								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										3rd Floor, Kiran Tower , Service Road, <br>
										Teacher's Colony, Sector 5, HSR Layout, Near Silk Board Junction,<br>
										Bengaluru, Karnataka 560034. 
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> +91 86184 14801<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:info@skillsgroom.com">info@skillsgroom.com</a>
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Informations</h4>

								<ul>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="return.html">Return</a></li>
									<li><a href="privacy.html">Privacy Policy</a></li>
									<li><a href="terms.html">Terms Of Use</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Follow Us</h4>
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
								<a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
								<a href="#" class="social-icon si-dark si-colored si-pinterest nobottommargin" style="margin-right: 10px;">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								<a href="#" class="social-icon si-dark si-colored si-linkedin nobottommargin" style="margin-right: 10px;">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
							</div>

						</div>

					</div>


				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					
© Copyright 2020 All Rights Reserved by <a href="index.html">Skillsgroom</a>
					

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