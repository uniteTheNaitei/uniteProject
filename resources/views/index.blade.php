
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fitness &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{Asset('assets/css/animate.css')}}">


	
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{Asset('assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{Asset('assets/css/superfish.css')}}">

	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="{{Asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Fit<span>ness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="classes.html" class="fh5co-sub-ddown">Classes</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="left-sidebar.html">Web Development</a></li>
									 	<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
										<li>
											<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
											<ul class="fh5co-sub-menu">
												<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
												<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
												<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
												<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
												<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
												<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
											</ul>
										</li>
										<li><a href="#">UI Animation</a></li>
										<li><a href="#">Copywriting</a></li>
										<li><a href="#">Photography</a></li>
									</ul>
								</li>
								<li>
									<a href="schedule.html">Schedule</a>
								</li>
								<li><a href="trainer.html">Trainers</a></li>
								<li><a href="about.html">About</a></li>
								@guest
								<li><a href="/login">Login</a></li>
								@else
								<li>
									<a class="fh5co-sub-ddown">{{$user->name}}</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="profile">My Profile</a></li>
										 <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</ul>
								</li>
								@endguest
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/home-image.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-m	d-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<span><a class="btn btn-primary" href="#">Start Your Journey</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:fh5co-hero -->



		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Our Programs</h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-dumbell.svg')}}" alt="Cycling">
							<h3>Body Combat</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-yoga.svg')}}" alt="">
							<h3>Yoga Programs</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-cycling.svg')}}" alt="">
							<h3>Cycling Program</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-boxing.svg')}}" alt="Cycling">
							<h3>Boxing Fitness</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-swimming.svg')}}" alt="">
							<h3>Swimming Program</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="{{Asset('assets/images/fit-massage.svg')}}" alt="">
							<h3>Massage</h3>

							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- BLOG HERE  -->


		<div id="fh5co-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="heading-section animate-box">
									<h2>Recently Blog</h2>
							</div>
						</div>
						<?php $i = 1; ?>
						@if (count($course))
				        @foreach ($course as $post)
						<div class="col-md-12 col-md-offset-0">


							<div class="fh5co-blog animate-box">
								<div class="inner-post">
									<a href="#"><img class="img-responsive" src={{$post->img_1}} alt=""></a>
								</div>
								 <div class="desc">
								 	<!-- Fit link here -->
									<h3><a href=""#>{{$post->name}}</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>Far far away, behind the word mountains</p>
									<a href="#" class="btn btn-default">Read More</a>



								</div>
							</div>
						</div>

						@endforeach
				        @endif
					</div>
					<div class="a">
                        <ul class="a">
                            {!! $course->render() !!}
                        </ul>
                    </div>
				</div>
			</div>
		</div>

		<!-- fh5co-blog-section -->

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">About Us</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
								<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Drop us a line</h3>
							<form class="contact-form">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Fitness</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
<!-- <script src="{{Asset('assets/theme/lib/jquery/jquery.min.js')}}"></script> -->

	<script src="{{Asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{Asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{Asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{Asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{Asset('assets/js/hoverIntent.js')}}"></script>
	<script src="{{Asset('assets/js/superfish.js')}}"></script>

	<!-- Main JS (Do not remove) -->
	<script src="{{Asset('assets/js/main.js')}}"></script>

	</body>
</html>

