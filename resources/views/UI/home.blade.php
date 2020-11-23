

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta name="author" content="SemiColonWeb"/>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Stylesheets
    ============================================= -->
	 <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
  <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
  <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
      rel="stylesheet" type="text/css"/>
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
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <script>


      //this will hide message after 3 seconds
      setTimeout(function () {
          $("#statusMessage").hide();
      }, 3000)

  </script>
  <!-- Document Title
    ============================================= -->
  <title>::Welcome to Skillsgroom | Home::</title>

</head>
<div id="statusMessage">
</div>
<body class="stretched" id="pop_up_overflow">

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
							<li class="current"><a href="blog/index.php"><div>Blog</div></a></li>
							<!--<li><a href="about.html"><div>About Us</div></a></li>
							<li><a href="contact.html"><div>Contact Us</div></a></li>
<li><a href="contact.html"><div>Sign Up</div></a></li>-->
						</ul>


					</nav><!-- #primary-menu end -->

      </div>

    </div>

  </header><!-- #header end -->

  <section id="slider" class="slider-element slider-parallax"
           style="background: url('{{URL::asset('UI/images/banner.jpg')}}') no-repeat; background-size: cover" data-height-xl="500"
           data-height-lg="500" data-height-md="400" data-height-sm="300" data-height-xs="250">
    <div class="slider-parallax-inner">

      <div class="container clearfix">
        <div class="vertical-middle dark center">

          <div class="heading-block nobottommargin center">
            <h1>
								<span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX" data-speed="3500">
									Find something new to learn here <br><span class="t-rotate">Best teachers|Brilliant Speakers|Perfect Coaches</span> 
								</span>
            </h1>
            <!--							<span class="d-none d-md-block">Awesome teachers | Brilliant Speakers | Perfect Coaches</span>-->
          </div>


        </div>
      </div>
    </div>
  </section>


  <!-- Content
      ============================================= -->
  <div id="content">
    <div class="container">


      	<div id="loginPopup">
        <div class="form-popup" id="popupForm">
          

          <form action="" class="form-container" method="post" enctype="multipart/form-data">
            <div class="alert alert-success" id="ShowMsgInq" style="display: none;">
              <strong id="SussMsgInq"></strong> 
            </div>

            <h2>Fill the form</h2>
            <label for="name">
              <strong>Name</strong>
            </label>
            <input type="text" id="name" placeholder="Your Name" name="username" required>
            <label for="email">
              <strong>E-mail Id</strong>
            </label>
            <input type="text" id="email" placeholder="Your Email" name="useremail" required>
            <label for="mobile">
              <strong>Mobile Number</strong>
            </label>
            <input type="text" id="mobile" placeholder="Your Mobile no" name="usermobile" required>
            <label for="location">
              <strong>Location</strong>
            </label>
            <input type="text" id="location" placeholder="Your Location" name="userlocation" required>
            <label for="category">
              <strong>Category</strong>
            </label>

            <select id="category" name="category" required>
              <option value="General Inquiry" id="General">General inquiry</option>
              <option value="Want to join as Instructor" id="instructor">Want to join as Instructor or teacher</option>
              <option value="Music" id="music">Music</option>
              <option value="Development" id="development">Development</option>
              <option value="Teacher" id="teacher">Teacher</option>
              <option value="Food" id="food">Food</option>
              <option value="Business" id="business">Business</option>
              <option value="Health fitness" id="health">Health fitness</option>
              <option value="Lifestyle" id="lifestyle">Lifestyle</option>
              <option value="Language" id="language">Language</option>
              <option value="Paint" id="paint">Paint</option>
              <option value="Photography" id="photography">Photography</option>
              <option value="Digital marketing" id="digital">Digital marketing</option>
              <option value="Academics" id="academics">Academics</option>
            </select>
            <label for="details">
              <strong>Inquiry details</strong>
            </label>
            <textarea type="text" id="inquiry" placeholder="Detailed text of your query or interest"
                      name="userdetails" required></textarea>
            <input type="button" name="send" id="Inquiry" class="btn" value="Submit">
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      </div>

      <!-- Categories
                ============================================= -->
		<div class="row topmargin align-items-center divcenter bottommargin-lg" style="max-width: 940px">
						<div class="col-md-3 mb-2 mb-md-0">
							<h3 class="mb-0">Associated Coaching Partners:</h3>
						</div>
						<div class="col-md-9" style="z-index: 0;">
							<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="50" data-nav="false" data-pagi="false" data-items-xs="2" data-items-md="3" data-items-xl="4" data-loop="true" data-autoplay="3500">
								<div class="oc-item"><a href="https://yatriclasses.skillsgroom.com"><img src="{{URL::asset('UI/images/clients/1.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Yatri classes Vadodara,Gujarat B.Com Tuitions</div>
									<div class="center mt-3"><a href="https://yatriclasses.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://acceleratedacademy.skillsgroom.com"><img src="{{URL::asset('UI/images/clients/2.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Vadodara,Gujarat Science Tuitions VII to XII</div>
									<div class="center mt-3"><a href="https://acceleratedacademy.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://knowledgeseekers.skillsgroom.com"><img src="{{URL::asset('UI/images/clients/3.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Ahmedabad,Gujarat Storyboard /Life Skills teaching</div>
									<div class="center mt-3"><a href="https://knowledgeseekers.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://glowwormacademy.skillsgroom.com"><img src="{{URL::asset('UI/images/clients/4.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Ahmedabad,Gujarat ML &amp; Data Science Training</div>
									<div class="center mt-3"><a href="https://glowwormacademy.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://abapro.skillsgroom.com"><img src="{{URL::asset('UI/images/clients/5.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Bangalore,Karnataka Business Analysis Training</div>
									<div class="center mt-3"><a href="https://abapro.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://www.bulletproofyourstartup.com/"><img src="{{URL::asset('UI/images/clients/6.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">Bulletproof Bangalore,Startups Coaching</div>
									<div class="center mt-3"><a href="https://www.bulletproofyourstartup.com" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
								<div class="oc-item"><a href="https://skillsgroom.com/sites/vikasgupta"><img src="{{URL::asset('UI/images/clients/7.jpg')}}" alt="clients" title="click to view"></a>
								<div class="center" style="height: 80px;">New Delhi,Guitar Certification Courses London</div>
									<div class="center mt-3"><a href="https://skillsgroom.com/sites/vikasgupta" class="button button-3d button-mini button-rounded button-aqua button-light">More</a></div>
								</div>
							</div>
						</div>
					</div>
		
      <!--<div class="row course-categories clearfix mb-4" style="padding: 0 0 60px;">
        <div class="col-lg-3 col-sm-4 mt-4">
          <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/teacher.jpg" alt="Card image">
              <a href="https://yatriclasses.skillsgroom.com" class="card-img-overlay rounded p-0" style="background-color: rgba(251,51,100,0.8);">
                <span><i class="icon-line-book"></i>Yatri Classes Vadodara,Gujarat B.Com Tuitions</span>
              </a>
            </div>
          </button>
        </div>

        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/development.jpg" alt="Card image">
              <a href="https://acceleratedacademy.skillsgroom.com" class="card-img-overlay rounded p-0" style="background-color: rgba(29,74,103,0.8);">
                <span><i class="icon-code1"></i>Accelerated&nbsp;Academy Vadodara,Gujarat Science Tuitions VII to XII</span>
              </a>
            </div>
           </button>
        </div>


        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/paint.jpg" alt="Card image">
              <a href="https://knowledgeseekers.skillsgroom.com" class="card-img-overlay rounded p-0" style="background-color: rgba(23,116,234,0.8);">
                <span><i class="icon-paint-brush"></i>Ekta Desai's&nbsp;Knolwedge&nbsp;Seekers Ahmedabad,Gujarat Storyboard /Life Skills teaching</span>
              </a>
            </div>
           </button>
        </div>

        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/academics.jpg" alt="Card image">
              <a href="https://glowwormacademy.skillsgroom.com" class="card-img-overlay rounded p-0" style="background-color: rgba(97,182,5,0.8);">
                <span><i class="icon-line2-user"></i>Glowworm&nbsp;Academy Ahmedabad,Gujarat ML &amp; Data Science Training</span>
              </a>
            </div>
           </button>
        </div>

        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/business.jpg" alt="Card image">
              <a href="https://abapro.skillsgroom.com" class="card-img-overlay rounded p-0" style="background-color: rgba(252,108,52,0.8);">
                <span><i class="icon-chart-bar1"></i>ABA Pro Bangalore,Karnataka Business&nbsp;Analysis&nbsp;Training</span>
              </a>
            </div>
           </button>
        </div>

        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/marketing.jpg" alt="Card image">
              <a href="https://www.bulletproofyourstartup.com/" class="card-img-overlay rounded p-0" style="background-color: rgba(80,167,159,0.8);">
                <span><i class="icon-line-share"></i>Bulletproof&nbsp;Your&nbsp;Startup Bangalore,Karnataka Startups/Entrepreneurship Coaching</span>
              </a>
            </div>
           </button>
        </div>

        <div class="col-lg-3 col-sm-4 mt-4">
           <button class="open-button" onclick="openForm()">
            <div class="card hover-effect">
              <img class="card-img" src="course/images/categories/music.jpg" alt="Card image">
              <a href="https://skillsgroom.com/sites/vikasgupta" class="card-img-overlay rounded p-0" style="background-color: rgba(182,5,167,0.85);">
                <span><i class="icon-music1"></i>Vikas's Guitar Career<br>New Delhi Guitar&nbsp;Certification&nbsp;Courses Trinity College of London</span>
              </a>
            </div>
           </button>
        </div>

      </div>-->

      <div class="clear"></div>
    </div>
	  
	   <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container">

        <div class="section-title">
          <h2>Live Online Classes and Events</h2>
          <!--<p>Live Online Classes and Events</p>-->
        </div>

        <div class="row">
          @foreach($Courses as $Course)
          <a href="course_details/{{$Course->id}}" target="_blank">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="/Admin/featured_image/{{$Course->featured_image}}" class="img-fluid" alt="">
              <div class="member-content">
              <h4>{{$Course->course_name}}</h4>
              <br/>
              <input type="hidden" value="{{$Course->course_name}}" name="course_name">
                <span>{{$Course->type}}</span>
                <p>Tutor : {{$Course->name}}</p>
                <p>
                 Per Session - Rs.{{$Course->fees}}
                </p>
<a href="/book_demo?course_name=<?php echo $Course->course_name ?>&id=<?php echo $Course->TeacherId ?>&tutor_name=<?php echo $Course->name ?>" target="_blank" class="button button-3d button-small button-rounded button-amber ls1 ls1 nott">Book Free Demo Class</a>
              </div>
            </div>
          </div>
          </a>
          @endforeach
        </div>

      </div>
    </section><!-- End Trainers Section -->
	  
    <!-- ======= Schedule Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container">
<div class="heading-block nobottomborder mt-0 mb-4 left">
        <h3>Course Discovery</h3>
      </div>
        <div class="row">

          <!--Schedule Carousel-->
          <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-autoplay="4000" data-nav="true" data-loop="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
            <!--Schedule Item 1-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>
                    <!--share icon-->
                    <img src="{{URL::asset('UI/images/schedule/course-5.jpg')}}" class="cropped_schedule" alt="...">
                  </div>
                  <div class="course-content">

                    <h3><a href="#">Data Science &amp; Machine Learning Certification Training </a><br><span>by Glowworm Academy, Ahmedabad, Gujarat</span></h3>
                    <ul class="iconlist">
								<li><i class="icon-book1"></i> Projects + Internship for beginners</li>
								<li><i class="icon-book1"></i> Career development for professionals </li>
								<li><i class="icon-book1"></i> Handholding to make you Job ready</li>
							</ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
						<a href="https://glowwormacademy.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--Schedule Item 2-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>
                    <!--share icon-->
                    <img src="{{URL::asset('UI/images/schedule/course-6.jpg')}}" class="cropped_schedule" alt="...">
                  </div>
                  <div class="course-content">
				     <h3><a href="#">Drum Classes</a><br><span>by Abhishek Raj Sinha, Delhi, NCR</span></h3>
                    <ul class="iconlist">
					 <li><i class="icon-book1"></i>10+ years of teaching experience</li>
                     <li><i class="icon-book1"></i>Professional Drummer  </li>
                     <li><i class="icon-book1"></i>1 to 1 or Group teaching</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#BookNow">
                        <h4>Book a Demo</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--Schedule Item 3-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>
                    <!--share icon-->
                    <img src="{{URL::asset('UI/images/schedule/course-1.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Accounting Coaching for Business Owners</a><br><span>by Accountswale, Bangalore, Karnataka</span></h3>
                     <ul class="iconlist">
					<li><i class="icon-book1"></i> One to one coaching  by Mr.Suresh Vankar</li>
					<li><i class="icon-book1"></i> 20+ years experience in working with startups</li>
					<li><i class="icon-book1"></i> Expert in setting up efficient operations &amp; Finance team</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#BookNow">
                        <h4>Book a Demo</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!--Schedule Item 4-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-2.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">


                    <h3><a href="#">Business Analyst Training</a><br><span>by ABA Pro, Bangalore, Karnataka</span></h3>
                    <ul class="iconlist">
						<li><i class="icon-book1"></i> Great career opportunities in Business Analysis </li>
						<li><i class="icon-book1"></i> Practical training by Senior professionals</li>
						<li><i class="icon-book1"></i> Every industry needs Business Analyst</li>
					</ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
						<a href="https://abapro.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--Schedule Item 5-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-3.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Yoga for Healthy Living</a><br><span>by Shri Sarju Karia, Rajkot, Gujarat </span></h3>
                     <ul class="iconlist">
						<li><i class="icon-book1"></i> Join him for Daily Yoga Practice</li>
						<li><i class="icon-book1"></i> Learn from Yogi and Spiritual leader</li>
						<li><i class="icon-book1"></i> Language of teaching -Hindi &amp; Gujarati</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#BookNow">
                        <h4>Book a Demo</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--Schedule Item 6-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-4.jpg')}}" class="cropped_schedule" alt="...">
                  </div>
                  <div class="course-content">

                    <h3><a href="#">Tuitions for B.Com and CMA</a><br><span>by Yatri Classes, Vadodara, Gujarat</span></h3>
					  <ul class="iconlist">
						  <li><i class="icon-book1"></i> 18+ years of Teaching Experience</li>
						  <li><i class="icon-book1"></i> 10000+ Classes Delivered</li>
						  <li><i class="icon-book1"></i> Specialization in Accountancy &amp; Statistics</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">                      
						<a href="https://yatriclasses.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
<!--Schedule Item 7-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-7.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Tuitions for Science - Grade VII to IX</a><br><span>by Accelerated Academy, Vadodara, Gujarat</span></h3>
                        <ul class="iconlist">
							<li><i class="icon-book1"></i> 10+ years Teaching Experience </li>
							<li><i class="icon-book1"></i> Giving tuitions for CBSE Syllabus </li>
							<li><i class="icon-book1"></i> Interactive teaching methods</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">                      
						<a href="https://acceleratedacademy.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
			  <!--Schedule Item 8-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-8.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Tuitions Physics- Grade X to XII</a><br><span>by Accelerated Academy, Vadodara, Gujarat</span></h3>
                        <ul class="iconlist">
							<li><i class="icon-book1"></i> 10+ years Teaching Experience </li>
   							<li><i class="icon-book1"></i> Giving tuitions for CBSE Syllabus </li>
   							<li><i class="icon-book1"></i> Focused learning &amp; NEET preperation</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">                      
						<a href="https://acceleratedacademy.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
			  <!--Schedule Item 9-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-9.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">


                    <h3><a href="#">Music Hobby Classes</a><br><span>by Prof. Harish Verma,Varanasi, UP</span></h3>
                    <ul class="iconlist">
						<li><i class="icon-book1"></i> 15+ years of Teaching Experience</li>
						<li><i class="icon-book1"></i> Professional performer</li>
						<li><i class="icon-book1"></i> Specialization in Guitar, Violin and Harmonium</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
						<a href="https://skillsgroom.com/sites/harishverma"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
			  <!--Schedule Item 10-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-10.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Guitar -Graded Course, Trinity College London</a><br><span>by Vikas Gupta, Ghaziabad, NCR, UP</span></h3>
                        <ul class="iconlist">
							<li><i class="icon-book1"></i> 10+ years of Guitar professional teaching</li>
    						<li><i class="icon-book1"></i> 6+ Syllabus teaching</li>
    						<li><i class="icon-book1"></i> Certification and grades as per Trinity College London</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">                      
						<a href="https://skillsgroom.com/sites/vikasgupta"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
			  <!--Schedule Item 11-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-11.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                    <h3><a href="#">Startups Coaching &amp; Mentorship</a><br><span>by Bulletproof your startup, Bangalore, Karnataka </span></h3>
                       <ul class="iconlist">
						   <li><i class="icon-book1"></i> Deep coaching by Mr.Ravi Challu</li>
    						<li><i class="icon-book1"></i> 42+ years of Industry Expertise </li>
						   <li><i class="icon-book1"></i> Startups mentor from ideation to success story</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">
						<a href="https://www.bulletproofyourstartup.com/"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
			  <!--Schedule Item 12-->
            <div class="oc-item">
              <div class="ipost clearfix">

                <div class="course-item">
                  <div>

                    <img src="{{URL::asset('UI/images/schedule/course-12.jpg')}}" class="cropped_schedule" alt="...">

                  </div>
                  <div class="course-content">
                  <h3><a href="#">Grammar from grassroots, StoryBoard concepts</a><br><span>by Knowledge Seekers, Ahmedabad, Gujarat</span></h3>
                       <ul class="iconlist"> 
						<li><i class="icon-book1"></i> 10+ years of life skills teaching experience</li>
						<li><i class="icon-book1"></i> Unique teaching concepts</li>
						<li><i class="icon-book1"></i> Creative thinking &amp; writing for school kids</li></ul>
                    <div class="d-flex justify-content-between align-items-center mb-3">                      
						<a href="https://knowledgeseekers.skillsgroom.com"><h4 style="background-color: #17A9E1;">Visit Course</h4></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--Schedule Ends-->

          <div class="clear"></div>
        </div>
      </div>
    </section><!-- End Schedule Section -->	 
	  
	 <!-- ======= Upcoming Section ======= -->
	  <section>
	  <div class="container clearfix">

					

							<div class="section-title">
          <h2>Upcoming Events</h2>
          <!--<p>Our Features</p>-->
        </div>

							<div class="row">

								<div class="entry event col-6">
									<div class="grid-inner row align-items-center no-gutters">
										<div class="entry-image col-md-5 mb-md-0">
											
												<img src="{{URL::asset('UI/images/upcoming/1_upcoming.jpg')}}" alt="Inventore voluptates velit totam ipsa tenetur">
												<div class="entry-date">3&amp;4<span>Oct</span></div>
											
										</div>
										<div class="col-md-7 pl-md-4">
											<div class="entry-title title-xs">
												<h2><a href="#">Machine Learning and Data Science</a></h2>
											</div>
											<div class="entry-meta">
												<ul>
													<li><i class="icon-time"></i>5 Hours</li>
													<li><i class="icon-map-marker2"></i>Ahmedabad, Gujarat</li>
												</ul>
											</div>
											<div class="entry-content">
												<div class="btn btn-info mt-2 mr-2" style="cursor: unset;">Fee - Rs. 500 </div> <a href="https://rzp.io/l/Skillsgroom" class="btn btn-danger mt-2">Register Now</a>
											</div>
										</div>
									</div>
								</div>

								<div class="entry event col-6">
									<div class="grid-inner row align-items-center no-gutters">
										<div class="entry-image col-md-5 mb-md-0">
											
												<img src="{{URL::asset('UI/images/upcoming/2_upcoming.jpg')}}" alt="Nemo quaerat nam beatae iusto minima vel">
												<div class="entry-date">26<span>Sep</span></div>
											
										</div>
										<div class="col-md-7 pl-md-4">
											<div class="entry-title title-xs">
												<h2><a href="#">Startup Funding Master Class</a></h2>
											</div>
											<div class="entry-meta">
												<ul>
													<li><i class="icon-time"></i>10:00 A.M - 12:00 P.M</li>
													<li><i class="icon-map-marker2"></i>Bangalore, KA</li>
												</ul>
											</div>
											<div class="entry-content">
												<div class="btn btn-info mt-2 mr-2" style="cursor: unset;">Free Seminar </div> <a href="https://www.bulletproofyourstartup.com/workshop/5899ef6f-79b7-4208-99ad-7a54884cdcad" class="btn btn-danger mt-2">Register Now</a>
											</div>
										</div>
									</div>
								</div>

								

								

							</div>

						
						
									


				</div>
	  </section>
    <!-- ======= Features Section ======= -->
    <section class="feature_area pt-120 pb-130">
      <div class="container">
        <div class="section-title">
          <h2>Features</h2>
          <p>Our Features</p>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div class="feature_content">

              <div class="row">
                <div class="col-sm-6 choose_col">
                  <div class="single_choose mt-30">
                    <div class="choose_icon">
                      <img src="{{URL::asset('UI/images/choose_icon-1.png')}}" alt="Icon">
                    </div>
                    <div class="choose_content">
                      <h5 class="title"><a href="#">Great Speakers</a></h5>
                      <p>Learn live directly from experts wherever you are</p>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="col-sm-6 choose_col">
                  <div class="single_choose mt-30">
                    <div class="choose_icon">
                      <img src="{{URL::asset('UI/images/choose_icon-2.png')}}" alt="Icon">
                    </div>
                    <div class="choose_content">
                      <h5 class="title"><a href="#">Experience</a></h5>
                      <p>Enjoy with great learning experience from wherever you are </p>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="col-sm-6 choose_col">
                  <div class="single_choose mt-30">
                    <div class="choose_icon">
                      <img src="{{URL::asset('UI/images/choose_icon-3.png')}}" alt="Icon">
                    </div>
                    <div class="choose_content">
                      <h5 class="title"><a href="#">Networking</a></h5>
                      <p>Schedule a networking meetups and invite anyone to join you</p>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="col-sm-6 choose_col">
                  <div class="single_choose mt-30">
                    <div class="choose_icon">
                      <img src="{{URL::asset('UI/images/choose_icon-4.png')}}" alt="Icon">
                    </div>
                    <div class="choose_content">
                      <h5 class="title"><a href="#">Party</a></h5>
                      <p>Host a virtual party and let the world join you</p>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="col-sm-6 choose_col">
                  <div class="single_choose mt-30">
                    <div class="choose_icon">
                      <img src="{{URL::asset('UI/images/choose_icon-5.png')}}" alt="Icon">
                    </div>
                    <div class="choose_content">
                      <h5 class="title"><a href="#">New People</a></h5>
                      <p>Find new co-learner everytime you enroll new event here</p>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature_image d-none d-lg-table">
        <div class="image">
          <img src="{{URL::asset('UI/images/choose_bg.png')}}" alt="">
        </div>
      </div>
      <div class="ad_image"><img src="{{URL::asset('UI/images/ad_banner.png')}}" alt=""/></div>
    </section>
	  
	  
	  <!-- Features
				============================================= -->
	  <div class="section mt-0 mb-0 pb-0 pt-4 courses">
					<div class="container" style="z-index: 0;">
						<div class="heading-block nobottomborder center divcenter mb-0 clearfix" style="max-width: 700px">							
							<h3 class="nott ls0 mb-3">Are you running Tuition Classes ?</h3>
							<p>Partner with us today and use our best in class LMS 100% free ( Free upto 30 Students)</p>
						</div>
						<div class="row justify-content-between align-items-center clearfix">

							<div class="col-lg-4 col-sm-6">

								<div class="feature-box fbox-right noborder">				 
									<h3 class="nott ls0">Create Tuition Batches</h3>
									<p>Easily create and manage Batches as per your Tuition Timing. Register your students under their respective batch.</p>
								</div>

								<div class="feature-box fbox-right noborder mt-5">
									
									<h3 class="nott ls0">Make students groups</h3>
									<p>Create students groups based on their grades /class and organise all communications.</p>
								</div>

								<div class="feature-box fbox-right noborder mt-5">
									
									<h3 class="nott ls0">Share files and Video recordings</h3>
									<p>Unlimited Video and File storage. Give access to only View or download based on need.  Edit /Remove access in seconds.</p>
								</div>

							</div>

							<div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5">
								<a href="/partners"><img src="{{URL::asset('UI/images/tuition.png')}}" alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)"></a>
								<a href="/partners" class="button button-3d button-small button-rounded button-aqua ls1 ls1 nott">Partner With Us</a>
            </button>
							</div>

							<div class="col-lg-4 col-sm-6">

								<div class="feature-box noborder">
									
									<h3 class="nott ls0">Create test papers</h3>
									<p>Prepare online test papers with the option of MCQ, Fill in the blank or Descriptive. Ease the flow with zero manual work.</p>
								</div>

								<div class="feature-box noborder mt-5">
									
									<h3 class="nott ls0">Conduct online tests</h3>
									<p>Schedule online tests and create rules, Quickly check answers and publish results.</p>
								</div>

								<div class="feature-box noborder mt-5">
									
									<h3 class="nott ls0">Give assignments online</h3>
									<p>On a click , create an assignment or upload files and assign it to students . Manage assignment submission and checking online with simple steps.</p>
								</div>

							</div>

						</div>
					</div>
				</div>
	  
	   <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" style="z-index: 0;">

        <div class="section-title">
          <h2>Teachers I Speakers I Coaches</h2>
          <!--<p>Our Professional Trainers</p>-->
        </div>

        <div class="row">
			
			<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-autoplay="3000" data-nav="true" data-loop="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="4">

						<div class="oc-item">							
							<a href="https://yatriclasses.skillsgroom.com"><img src="{{URL::asset('UI/images/trainers/male.jpg')}}" alt="Image 1" class="cropped" title="Click to view"></a>
							<div class="member member-content">
                <h4>Hetal Patel</h4>
                <span>Lecturer</span>
							</div>
							<div class="center mt-3"><a href="https://yatriclasses.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://acceleratedacademy.skillsgroom.com"><img src="{{URL::asset('UI/images/trainers/trainer-7.jpg')}}" alt="Image 2" class="cropped" title="Click to view"></a>
							<div class="member member-content">
                <h4>Neelesh Upadhyay</h4>
                <span>Science Teacher</span>
							</div>
							<div class="center mt-3"><a href="https://acceleratedacademy.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://acceleratedacademy.skillsgroom.com"><img src="{{URL::asset('UI/images/trainers/trainer-8.jpg')}}" alt="Image 3" class="cropped" title="Click to view"></a>
							<div class="member member-content">
                <h4>T. Bhaskar Rao</h4>
                <span>Chemistry Teacher</span>
							</div>
							<div class="center mt-3"><a href="https://acceleratedacademy.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://knowledgeseekers.skillsgroom.com"><img src="{{URL::asset('UI/images/trainers/trainer-12.jpg')}}" alt="Image 4" class="cropped"  title="Click to view"></a>
							<div class="member member-content">
                <h4>Ekta Desai</h4>
                <span>Life Skills Coach</span>
							</div>
							<div class="center mt-3"><a href="https://knowledgeseekers.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://glowwormacademy.skillsgroom.com"><img src="{{URL::asset('UI/images/trainers/trainer-4.jpg')}}" alt="Image 5" class="cropped"  title="Click to view"></a>
							<div class="member member-content">
                <h4>Aditya Shah</h4>
                <span>ML &amp; Data Science Expert</span>
							</div>
							<div class="center mt-3"><a href="https://glowwormacademy.skillsgroom.com" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://abapro.skillsgroom.com/"><img src="{{URL::asset('UI/images/trainers/trainer-2.jpg')}}" alt="Image 6" class="cropped"  title="Click to view"></a>
							<div class="member member-content">
                <h4>Rajesh Sinha</h4>
                <span>Business Analysis Professional</span>
							</div>
							<div class="center mt-3"><a href="https://abapro.skillsgroom.com/" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
						<div class="oc-item">
							<a href="https://www.bulletproofyourstartup.com/"><img src="{{URL::asset('UI/images/trainers/trainer-11.jpg')}}" alt="Image 7" class="cropped"  title="Click to view"></a>
							<div class="member member-content">
                <h4>Ravi Challu</h4>
                <span>Startups Coach &amp; Mentor</span>
							</div>
							<div class="center mt-3"><a href="https://www.bulletproofyourstartup.com/" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
				<div class="oc-item">
							<a href="https://skillsgroom.com/sites/vikasgupta/"><img src="{{URL::asset('UI/images/trainers/trainer-10.jpg')}}" alt="Image 8" class="cropped" title="Click to view"></a>
					<div class="member member-content">
                <h4>Vikas Gupta</h4>
                <span>Guitar Teaching Specialist</span>
							</div>
					<div class="center mt-3"><a href="https://skillsgroom.com/sites/vikasgupta" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>
				<div class="oc-item">
							<a href="https://skillsgroom.com/sites/harishverma"><img src="{{URL::asset('UI/images/trainers/male.jpg')}}" alt="Image 9" class="cropped" title="Click to view"></a>
					<div class="member member-content">
                <h4>Harish Verma</h4>
                <span>Music Teacher</span>
							</div>
					<div class="center mt-3"><a href="https://skillsgroom.com/sites/harishverma" class="button button-3d button-mini button-rounded button-aqua button-light">Reach Me</a></div>
						</div>

					</div>
			
			
        </div>

      </div>
    </section><!-- End Trainers Section -->
	  
    <!-- Promo Section
                  ============================================= -->
    <div class="section m-0"
         style="z-index:0;padding: 120px 0; background: #FFF url('{{URL::asset('UI/images/instructor.jpg')}}') no-repeat right top / cover">
      <div class="container">
        <div class="row">

          <div class="col-md-5"></div>

          <div class="col-md-7">
            <div class="heading-block nobottomborder mb-4 mt-5">
              <h3>Become a Coaching Partner!</h3>
              <span>Teach What You Love.</span>
            </div>
            <p class="mb-2">If you are passionate about teaching or already into an online teaching , join us today to
              increase your reach multifolds in the next 1 year.</p>
            <p>Be a part of our success story and make an impact through interactive online teaching .</p>
            {{-- <a href="https://wa.me/918618414801?text=I'm%20interested%20to%20become%20a%20Learning%20Partner%20with%20Skillsgroom.%20Please%20call%20me%20back"
               class="button button-rounded button-xlarge ls0 ls0 nott t400">Join now</a> --}}

            <button class="button button-rounded button-xlarge ls0 ls0 nott t400 nomargin" onclick="openForm()">Inquiry
              email
            </button>
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

              <!--<h4>Locations</h4>-->
              <div style="background: url('{{URL::asset('UI/images/world-map.png')}}') no-repeat center center; background-size: 100%;">
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


<!-- Book Now -->
<div id="BookNow" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Book Now content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Book Free Demo Classes</h3>

        <div class="alert alert-success" id="ShowMsg" style="display: none;">
          <strong id="SussMsg"></strong> 
        </div>

        <form action="">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="" id="first_name" class="form-control" placeholder="Enter Your First Name">
          </div>

          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="" id="last_name" class="form-control" placeholder="Enter Your Last Name">
          </div>

          <div class="form-group">
            <label for="">Email Id</label>
            <input type="text" name="" id="email" class="form-control" placeholder="Enter Your Email Id">
          </div>

          <div class="form-group">
            <label for="">Contact Number</label>
            <input type="text" name="" id="contact" class="form-control" placeholder="Enter Your Contact Number">
          </div>

          <div class="form-group">
            <label for="">Country </label>
            <input type="text" name="" id="country" class="form-control" placeholder="Enter Your Country ">
          </div>

          <div class="form-group">
            <label for="">State</label>
            <input type="text" name="" id="state" class="form-control" placeholder="Enter Your State">
          </div>

          <div class="form-group">
            <label for="">City</label>
            <input type="text" name="" id="city" class="form-control" placeholder="Enter your City">
          </div>

          <div class="form-group pull-right">
            <button type="button" id="BookClass" name="send" class="btn btn-success ml-2" value="Submit Details">Submit</button>
          </div>
        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> --}}
    </div>

  </div>
</div>



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

<script>

$(document).on('click', '#Inquiry', function(){

var name = $("#name").val();


});


    function openForm() {
        document.getElementById("loginPopup").style.display = "block";
        document.getElementById("pop_up_overflow").style.overflow = "hidden";
    }

    function closeForm() {
        document.getElementById("loginPopup").style.display = "none";
        document.getElementById("pop_up_overflow").style.overflow = "initial";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        var modal = document.getElementById('loginPopup');
        if (event.target == modal) {
            closeForm();
        }
    }
</script>

</body>
</html>
