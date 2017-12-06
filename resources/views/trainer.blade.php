@extends('layouts.app')

@section('content')
    <body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <!-- end:fh5co-hero -->
            <div id="fh5co-team-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>Meet Our Trainers</h2>
                                <p>We work all over the world.We make you awesome</p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">

                        {{--my content--}}
                        <div class="container">
                            <div class="span8">
                                <?php $i = 1; ?>
                                @if (count($coachs))
                                    @foreach ($coachs as $post)
                                        <div class="col-md-12 ">


                                            <div class="fh5co-blog animate-box">
                                                <div class="">


                                                    <h1>{{$post->name}}</h1>
                                                    <p>Total Course: {{count($post->createdCourse)}}</p>

                                                    <div class="more label"><a href="trainer/course/{{$post->idPerson}}">View My Course</a></div>

                                                    <div class="clear"></div>


                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                                <div class="a">
                                    <ul class="a">
                                        {!! $coachs->render() !!}
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 animate-box">
                                <h3 class="section-title">About Us</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics.</p>
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
                                <p>Copyright 2016 Free Html5 <a href="#">Fitness</a>. All Rights Reserved. <br>Made with
                                    <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a>
                                    / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- END fh5co-page -->

    </div>
    </body>
@endsection

