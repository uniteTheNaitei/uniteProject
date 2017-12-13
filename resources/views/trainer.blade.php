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


        </div>
        <!-- END fh5co-page -->

    </div>
    </body>
@endsection

