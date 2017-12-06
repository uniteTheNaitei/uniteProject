@extends('layouts.app')

@section('content')




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
									<a href="#"><img class="img-responsive" style="max-height: 200px" src={{$post->img_1}} alt=""></a>
								</div>
								 <div class="desc">
								 	<!-- Fit link here -->
									<h3><a href=""#>{{$post->name}}</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>


									<p>This project actually likes a pennis</p>
									<a href="/course/{{$post->idCourse}}" class="btn btn-default">Read More</a>
				                    
				                    
				                    
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
            </header>
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5"
                 style="background-image: url(assets/images/home-image.jpg);">
                <div class="desc animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-m	d-7">
                                <h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                                            <h3><a href="" #>{{$post->name}}</a></h3>
                                            <span class="posted_by">Posted by: {{$post->trainer->name}}</span>
                                            <span class="comment"><a href="">{{count($post->comment)}}<i
                                                            class="icon-bubble22"></i></a></span>
                                            <p>{{$post->info}}</p>
                                            <a href="#" class="btn btn-default">Read More</a>


                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>

                </div>
            </div>

        </div>
        <div class="a">
            <ul class="a">
                {!! $course->render() !!}
            </ul>
        </div>
        <!-- fh5co-blog-section -->

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 animate-box">
                            <h3 class="section-title">About Us</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                the Semantics.</p>
                        </div>

                        <div class="col-md-4 animate-box">
                            <h3 class="section-title">Our Address</h3>
                            <ul class="contact-info">
                                <li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016
                                </li>
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
                                    <textarea class="form-control" id="message" rows="7"
                                              placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="btn-submit" class="btn btn-send-message btn-md"
                                           value="Send Message">
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
                            <p>Copyright 2016 Free Html5 <a href="#">Fitness</a>. All Rights Reserved. <br>Made with <i
                                        class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a>
                                / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
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

@endsection
