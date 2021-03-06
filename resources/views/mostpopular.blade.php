@extends('layouts.app')

@section('content')




    <!-- BLOG HERE  -->


    <div id="fh5co-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="heading-section animate-box">
                            <h2>Most Popular Course</h2>
                        </div>
                    </div>
                    <?php $i = 1; ?>

                    @if (count($course))
                        @foreach ($course as $post)
                            <div class="col-md-12 col-md-offset-0">


                                <div class="fh5co-blog animate-box">
                                    <div class="inner-post">
                                        <a href="#"><img class="img-responsive" style="max-height: 200px"
                                                         src={{$post->img_1}} alt=""></a>
                                    </div>
                                    <div class="desc">
                                        <!-- Fit link here -->
                                        <h3><a href="" #>{{$post->name}}</a></h3>
                                        <p> like : {{$post->count}}</p>
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


    </div>
    <!-- END fh5co-page -->

    </div>


@endsection
