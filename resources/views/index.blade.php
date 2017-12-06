@extends('layouts.app')
@section('content')
	
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">




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

		


	</div>
	<!-- END fh5co-page -->

	</div>
@endsection
