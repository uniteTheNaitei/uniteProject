
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fitness &mdash; 100% Free With Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="aaa" />
    <meta name="keywords" content="bbb" />
    <meta name="author" content="ccc" />

    <!-
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
                        <h1 id="fh5co-logo"><a href="/">Fit<span>ness</span></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                  <a href="{{route('blog')}}">Blog</a>
                                </li>

                                <li><a href="{{route('trainer')}}">Trainers</a></li>

                                @guest
                                    <li><a href="/login">Login</a></li>
                                @else
                                    <li>
                                        <a class="fh5co-sub-ddown">{{Auth::user()->name}}</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="/profile">My Page</a></li>
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
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(/assets/images/home-image.jpg);">
                <div class="desc animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield("content")

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

